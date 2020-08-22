@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.order.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.orders.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="uuid">{{ trans('cruds.order.fields.uuid') }}</label>
                <input class="form-control {{ $errors->has('uuid') ? 'is-invalid' : '' }}" type="text" name="uuid" id="uuid" value="{{ old('uuid', '') }}">
                @if($errors->has('uuid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('uuid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.uuid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reference">{{ trans('cruds.order.fields.reference') }}</label>
                <input class="form-control {{ $errors->has('reference') ? 'is-invalid' : '' }}" type="text" name="reference" id="reference" value="{{ old('reference', '') }}">
                @if($errors->has('reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_data">{{ trans('cruds.order.fields.customer_data') }}</label>
                <input class="form-control {{ $errors->has('customer_data') ? 'is-invalid' : '' }}" type="number" name="customer_data" id="customer_data" value="{{ old('customer_data', '') }}" step="1">
                @if($errors->has('customer_data'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_data') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.customer_data_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipping_typeid">{{ trans('cruds.order.fields.shipping_typeid') }}</label>
                <input class="form-control {{ $errors->has('shipping_typeid') ? 'is-invalid' : '' }}" type="number" name="shipping_typeid" id="shipping_typeid" value="{{ old('shipping_typeid', '') }}" step="1">
                @if($errors->has('shipping_typeid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_typeid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.shipping_typeid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipping_price">{{ trans('cruds.order.fields.shipping_price') }}</label>
                <input class="form-control {{ $errors->has('shipping_price') ? 'is-invalid' : '' }}" type="number" name="shipping_price" id="shipping_price" value="{{ old('shipping_price', '0') }}" step="0.01">
                @if($errors->has('shipping_price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.shipping_price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_method">{{ trans('cruds.order.fields.payment_method') }}</label>
                <input class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" type="text" name="payment_method" id="payment_method" value="{{ old('payment_method', '') }}">
                @if($errors->has('payment_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment">{{ trans('cruds.order.fields.payment') }}</label>
                <input class="form-control {{ $errors->has('payment') ? 'is-invalid' : '' }}" type="text" name="payment" id="payment" value="{{ old('payment', '') }}">
                @if($errors->has('payment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.payment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pait_at">{{ trans('cruds.order.fields.pait_at') }}</label>
                <input class="form-control {{ $errors->has('pait_at') ? 'is-invalid' : '' }}" type="text" name="pait_at" id="pait_at" value="{{ old('pait_at', '') }}">
                @if($errors->has('pait_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pait_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.pait_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.order.fields.paid') }}</label>
                <select class="form-control {{ $errors->has('paid') ? 'is-invalid' : '' }}" name="paid" id="paid">
                    <option value disabled {{ old('paid', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Order::PAID_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('paid', 'notpaid') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('paid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('paid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.order.fields.paid_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection