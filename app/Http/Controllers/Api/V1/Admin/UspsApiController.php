<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreUspRequest;
use App\Http\Requests\UpdateUspRequest;
use App\Http\Resources\Admin\UspResource;
use App\Usp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UspsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('usp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UspResource(Usp::all());
    }

    public function store(StoreUspRequest $request)
    {
        $usp = Usp::create($request->all());

        if ($request->input('logo', false)) {
            $usp->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        return (new UspResource($usp))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Usp $usp)
    {
        abort_if(Gate::denies('usp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UspResource($usp);
    }

    public function update(UpdateUspRequest $request, Usp $usp)
    {
        $usp->update($request->all());

        if ($request->input('logo', false)) {
            if (!$usp->logo || $request->input('logo') !== $usp->logo->file_name) {
                if ($usp->logo) {
                    $usp->logo->delete();
                }

                $usp->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($usp->logo) {
            $usp->logo->delete();
        }

        return (new UspResource($usp))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Usp $usp)
    {
        abort_if(Gate::denies('usp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usp->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
