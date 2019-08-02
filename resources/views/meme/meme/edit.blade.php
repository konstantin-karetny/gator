@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ $item->id ? route('meme.update', $item->id) : route('meme.store') }}" method="POST">
            <div class="form-group row">
                <div class="header col-sm">
                    <h1>@lang('app.meme') - @lang('app.' . ($item->id ? 'edit' : 'create'))</h1>
                </div>
                <div class="btns col-sm text-sm-right">
                    <a class="btn btn-primary" href="{{ route('meme.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">@lang('app.save')</button>
                </div>
            </div>
            <div class="form-group row required">
                <label for="name" class="col-sm-2 col-form-label">@lang('app.name')</label>
                <div class="col-sm-10">
                    <input class="form-control" id="name" name="name" value="{{ $item->name }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="body" class="col-sm-2 col-form-label">@lang('app.body')</label>
                <div class="col-sm-10">
                    <input class="form-control" id="body" name="body" value="{{ $item->body }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">@lang('app.description')</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" name="description" value="{{ $item->description }}"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="poster" class="col-sm-2 col-form-label">@lang('app.poster')</label>
                <div class="col-sm-10">
                    <input class="form-control" id="poster" name="poster" value="{{ $item->poster }}">
                </div>
            </div>
            <input name="id" type="hidden" value="{{ $item->id }}">
            @csrf
            @method($item->id ? 'PUT' : 'POST')
        </form>
    </div>
@endsection