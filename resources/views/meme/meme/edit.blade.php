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
                <label for="added" class="col-sm-2 col-form-label">@lang('app.added')</label>
                <div class="col-sm-10">
                    <input class="form-control" id="added" name="added" type="checkbox" data-toggle="toggle" data-on="@lang('app.yes')" data-off="@lang('app.no')" data-onstyle="success" data-offstyle="danger" value="1"{{ $item->added ? ' checked' : '' }}>
                </div>
            </div>
            <div class="form-group row required">
                <label for="src_id" class="col-sm-2 col-form-label">@lang('app.src')</label>
                <div class="col-sm-10">
                    <select class="form-control" id="src_id" name="src_id" required>
                        @foreach ($srcs as $src)
                            <option value="{{ $src->id }}"{{ $src->id == $item->src_id ? ' selected' : '' }}>{{ $src->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row required">
                <label for="original_id" class="col-sm-2 col-form-label">@lang('app.original_id')</label>
                <div class="col-sm-10">
                    <input class="form-control" id="original_id" name="original_id" value="{{ $item->original_id }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="name" class="col-sm-2 col-form-label">@lang('app.name')</label>
                <div class="col-sm-10">
                    <input class="form-control" id="name" name="name" value="{{ $item->name }}" required>
                </div>
            </div>
            <div class="form-group row required">
                <label for="type_id" class="col-sm-2 col-form-label">@lang('app.type')</label>
                <div class="col-sm-10">
                    <select class="form-control" id="type_id" name="type_id" value="{{ $item->type_id }}" required>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}"{{ $type->id == $item->type_id ? ' selected' : '' }}>@lang('app.' . $type->alias)</option>
                        @endforeach
                    </select>
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
                    <textarea class="form-control" id="description" name="description">{{ $item->description }}</textarea>
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