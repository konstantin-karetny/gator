@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route($branch . '.update', $item->id ?: 0) }}" method="POST">
            <div class="form-group row">
                <div class="header col-sm">
                    <h1>@lang('app.src') - @lang('app.' . ($item->id ? 'edit' : 'create'))</h1>
                </div>
                <div class="btns col-sm text-sm-right">
                    <a class="btn btn-primary" href="{{ route($branch . '.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">@lang('app.save')</button>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">@lang('app.name')</label>
                <div class="col-sm-10">
                  <input class="form-control" id="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="alias" class="col-sm-2 col-form-label">@lang('app.alias')</label>
                <div class="col-sm-10">
                  <input class="form-control" id="alias">
                </div>
            </div>
            @csrf
        </form>
    </div>
@endsection