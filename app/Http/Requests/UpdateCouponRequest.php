<?php

namespace App\Http\Requests;

use App\Coupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCouponRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('coupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'uuid'        => [
                'string',
                'nullable',
            ],
            'code'        => [
                'string',
                'required',
                'unique:coupons,code,' . request()->route('coupon')->id,
            ],
            'value'       => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'percent_off' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'amount'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'amount_left' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
