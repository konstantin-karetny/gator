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
                <label for="permanent" class="col-sm-2 col-form-label">@lang('app.permanent')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="permanent" class="form-control" name="permanent" type="checkbox" data-toggle="toggle" data-on="@lang('app.yes')" data-off="@lang('app.no')" data-onstyle="success" data-offstyle="danger" value="1"{{ $item->permanent ? ' checked' : '' }}>
                </div>
            </div>
            <div class="form-group row required">
                <label for="src_id" class="col-sm-2 col-form-label">@lang('app.src')</label>
                <div class="col-sm-10 col-form-input">
                    <select id="src_id" class="form-control" name="src_id" required>
                        @foreach ($srcs as $src)
                            <option value="{{ $src->id }}"{{ $src->id == $item->src_id ? ' selected' : '' }}>{{ $src->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row required">
                <label for="original_id" class="col-sm-2 col-form-label">@lang('app.original_id')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="original_id" class="form-control" name="original_id" value="{{ $item->original_id }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="name" class="col-sm-2 col-form-label">@lang('app.name')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="name" class="form-control" name="name" value="{{ $item->name }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="type_id" class="col-sm-2 col-form-label">@lang('app.type')</label>
                <div class="col-sm-10 col-form-input">
                    <select id="type_id" class="form-control" name="type_id" value="{{ $item->type_id }}" required>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}"{{ $type->id == $item->type_id ? ' selected' : '' }}>@lang('app.' . $type->alias)</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row required">
                <label for="body" class="col-sm-2 col-form-label">@lang('app.body')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="body" class="form-control" name="body" value="{{ $item->body }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="preview" class="col-sm-2 col-form-label">@lang('app.preview')</label>
                <div class="col-sm-10 col-form-input">
                    <input id="preview" class="form-control" name="preview" value="{{ $item->preview }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">@lang('app.description')</label>
                <div class="col-sm-10 col-form-input">
                    <textarea id="description" class="form-control" name="description">{{ $item->description }}</textarea>
                </div>
            </div>
            <input name="id" type="hidden" value="{{ $item->id }}">
            @csrf
            @method($item->id ? 'PUT' : 'POST')
        </form>
    </div>
@endsection