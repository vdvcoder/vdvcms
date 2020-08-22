<?php

namespace App\Http\Requests;

use App\Banner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBannerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('banner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'       => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'link'        => [
                'string',
                'nullable',
            ],
        ];
    }
}
