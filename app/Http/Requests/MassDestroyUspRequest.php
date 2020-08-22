<?php

namespace App\Http\Requests;

use App\Usp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUspRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('usp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:usps,id',
        ];
    }
}
