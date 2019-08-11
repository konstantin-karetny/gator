@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ $item->id ? route('src.update', $item->id) : route('src.store') }}" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="header col-sm">
                    <h1>@lang('app.src') - @lang('app.' . ($item->id ? 'edit' : 'create'))</h1>
                </div>
                <div class="btns col-sm text-sm-right">
                    <a class="btn btn-primary" href="{{ route('src.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">@lang('app.save')</button>
                </div>
            </div>
            <div class="form-group row required">
                <label for="name" class="col-sm-2 col-form-label">@lang('app.name')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="name" class="form-control" name="name" value="{{ $item->name }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="alias" class="col-sm-2 col-form-label">@lang('app.alias')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="alias" class="form-control" name="alias" value="{{ $item->alias }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="url" class="col-sm-2 col-form-label">@lang('app.url')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="url" class="form-control" name="url" value="{{ $item->url }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="request_items_quantity" class="col-sm-2 col-form-label">@lang('app.request_items_quantity')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="request_items_quantity" class="form-control" name="request_items_quantity" value="{{ $item->request_items_quantity ?: config('app.meme.src.default_request_items_quantity') }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="filter_min_votes" class="col-sm-2 col-form-label">@lang('app.filter_min_votes')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="filter_min_votes" class="form-control" name="filter_min_votes" value="{{ $item->filter_min_votes }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="item_url_prefix" class="col-sm-2 col-form-label">@lang('app.item_url_prefix')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="item_url_prefix" class="form-control" name="item_url_prefix" value="{{ $item->item_url_prefix }}" required>
                </div>
            </div>
            <div class="form-group file row required">
                <label for="logo" class="col-sm-2 col-form-label">@lang('app.logo')</label>
                <div class="col-sm-10 col-form-input">
                    @if ($item->getKey())
                        <img src="{{ $item->logo_url }}">
                    @endif
                    <input id="logo" class="form-control-file" name="logo" type="file" {{ $item->getKey() ? '' : ' required' }}>
                </div>
            </div>
            <input name="id" type="hidden" value="{{ $item->id }}">
            @csrf
            @method($item->id ? 'PUT' : 'POST')
        </form>
    </div>
@endsection