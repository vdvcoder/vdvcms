<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'                      => [
                'string',
                'required',
            ],
            'email'                     => [
                'required',
                'unique:users',
            ],
            'password'                  => [
                'required',
            ],
            'roles.*'                   => [
                'integer',
            ],
            'roles'                     => [
                'required',
                'array',
            ],
            'mollie_customer'           => [
                'string',
                'nullable',
            ],
            'mollie_mandate'            => [
                'string',
                'nullable',
            ],
            'tax_percentage'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'trail_ends_at'             => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'extra_billing_information' => [
                'string',
                'nullable',
            ],
            'orders.*'                  => [
                'integer',
            ],
            'orders'                    => [
                'array',
            ],
        ];
    }
}
