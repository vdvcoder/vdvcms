@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('approved') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="approved" value="0">
                    <input class="form-check-input" type="checkbox" name="approved" id="approved" value="1" {{ old('approved', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                </div>
                @if($errors->has('approved'))
                    <div class="invalid-feedback">
                        {{ $errors->first('approved') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.approved_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mollie_customer">{{ trans('cruds.user.fields.mollie_customer') }}</label>
                <input class="form-control {{ $errors->has('mollie_customer') ? 'is-invalid' : '' }}" type="text" name="mollie_customer" id="mollie_customer" value="{{ old('mollie_customer', '') }}">
                @if($errors->has('mollie_customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mollie_customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.mollie_customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mollie_mandate">{{ trans('cruds.user.fields.mollie_mandate') }}</label>
                <input class="form-control {{ $errors->has('mollie_mandate') ? 'is-invalid' : '' }}" type="text" name="mollie_mandate" id="mollie_mandate" value="{{ old('mollie_mandate', '') }}">
                @if($errors->has('mollie_mandate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mollie_mandate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.mollie_mandate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tax_percentage">{{ trans('cruds.user.fields.tax_percentage') }}</label>
                <input class="form-control {{ $errors->has('tax_percentage') ? 'is-invalid' : '' }}" type="number" name="tax_percentage" id="tax_percentage" value="{{ old('tax_percentage', '0') }}" step="1">
                @if($errors->has('tax_percentage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tax_percentage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.tax_percentage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="trail_ends_at">{{ trans('cruds.user.fields.trail_ends_at') }}</label>
                <input class="form-control datetime {{ $errors->has('trail_ends_at') ? 'is-invalid' : '' }}" type="text" name="trail_ends_at" id="trail_ends_at" value="{{ old('trail_ends_at') }}">
                @if($errors->has('trail_ends_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trail_ends_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.trail_ends_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extra_billing_information">{{ trans('cruds.user.fields.extra_billing_information') }}</label>
                <input class="form-control {{ $errors->has('extra_billing_information') ? 'is-invalid' : '' }}" type="text" name="extra_billing_information" id="extra_billing_information" value="{{ old('extra_billing_information', '') }}">
                @if($errors->has('extra_billing_information'))
                    <div class="invalid-feedback">
                        {{ $errors->first('extra_billing_information') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.extra_billing_information_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="orders">{{ trans('cruds.user.fields.order') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('orders') ? 'is-invalid' : '' }}" name="orders[]" id="orders" multiple>
                    @foreach($orders as $id => $order)
                        <option value="{{ $id }}" {{ in_array($id, old('orders', [])) ? 'selected' : '' }}>{{ $order }}</option>
                    @endforeach
                </select>
                @if($errors->has('orders'))
                    <div class="invalid-feedback">
                        {{ $errors->first('orders') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.order_helper') }}</span>
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