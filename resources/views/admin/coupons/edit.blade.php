@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.coupon.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coupons.update", [$coupon->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="uuid">{{ trans('cruds.coupon.fields.uuid') }}</label>
                <input class="form-control {{ $errors->has('uuid') ? 'is-invalid' : '' }}" type="text" name="uuid" id="uuid" value="{{ old('uuid', $coupon->uuid) }}">
                @if($errors->has('uuid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('uuid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.uuid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.coupon.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $coupon->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.coupon.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Coupon::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', $coupon->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value">{{ trans('cruds.coupon.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="number" name="value" id="value" value="{{ old('value', $coupon->value) }}" step="1">
                @if($errors->has('value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="percent_off">{{ trans('cruds.coupon.fields.percent_off') }}</label>
                <input class="form-control {{ $errors->has('percent_off') ? 'is-invalid' : '' }}" type="number" name="percent_off" id="percent_off" value="{{ old('percent_off', $coupon->percent_off) }}" step="1">
                @if($errors->has('percent_off'))
                    <div class="invalid-feedback">
                        {{ $errors->first('percent_off') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.percent_off_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount">{{ trans('cruds.coupon.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $coupon->amount) }}" step="1">
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount_left">{{ trans('cruds.coupon.fields.amount_left') }}</label>
                <input class="form-control {{ $errors->has('amount_left') ? 'is-invalid' : '' }}" type="number" name="amount_left" id="amount_left" value="{{ old('amount_left', $coupon->amount_left) }}" step="1">
                @if($errors->has('amount_left'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_left') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.amount_left_helper') }}</span>
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