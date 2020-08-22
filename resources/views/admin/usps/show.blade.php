@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.usp.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.usps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.usp.fields.id') }}
                        </th>
                        <td>
                            {{ $usp->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usp.fields.title') }}
                        </th>
                        <td>
                            {{ $usp->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usp.fields.description') }}
                        </th>
                        <td>
                            {{ $usp->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usp.fields.logo') }}
                        </th>
                        <td>
                            @if($usp->logo)
                                <a href="{{ $usp->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $usp->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.usps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection