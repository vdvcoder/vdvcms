<?php

namespace App\Http\Requests;

use App\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'uuid'            => [
                'string',
                'nullable',
            ],
            'reference'       => [
                'string',
                'nullable',
            ],
            'customer_data'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'shipping_typeid' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'shipping_price'  => [
                'numeric',
            ],
            'payment_method'  => [
                'string',
                'nullable',
            ],
            'payment'         => [
                'string',
                'nullable',
            ],
            'pait_at'         => [
                'string',
                'nullable',
            ],
        ];
    }
}
