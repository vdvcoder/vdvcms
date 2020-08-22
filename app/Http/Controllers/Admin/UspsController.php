<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUspRequest;
use App\Http\Requests\StoreUspRequest;
use App\Http\Requests\UpdateUspRequest;
use App\Usp;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UspsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('usp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Usp::query()->select(sprintf('%s.*', (new Usp)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'usp_show';
                $editGate      = 'usp_edit';
                $deleteGate    = 'usp_delete';
                $crudRoutePart = 'usps';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('logo', function ($row) {
                if ($photo = $row->logo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder', 'logo']);

            return $table->make(true);
        }

        return view('admin.usps.index');
    }

    public function create()
    {
        abort_if(Gate::denies('usp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.usps.create');
    }

    public function store(StoreUspRequest $request)
    {
        $usp = Usp::create($request->all());

        if ($request->input('logo', false)) {
            $usp->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $usp->id]);
        }

        return redirect()->route('admin.usps.index');
    }

    public function edit(Usp $usp)
    {
        abort_if(Gate::denies('usp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.usps.edit', compact('usp'));
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

        return redirect()->route('admin.usps.index');
    }

    public function show(Usp $usp)
    {
        abort_if(Gate::denies('usp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.usps.show', compact('usp'));
    }

    public function destroy(Usp $usp)
    {
        abort_if(Gate::denies('usp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usp->delete();

        return back();
    }

    public function massDestroy(MassDestroyUspRequest $request)
    {
        Usp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('usp_create') && Gate::denies('usp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Usp();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
