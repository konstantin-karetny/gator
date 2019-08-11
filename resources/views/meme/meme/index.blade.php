@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group row">
            <div class="header col-sm">
                <h1>@lang('app.memes')</h1>
            </div>
            <div class="btns col-sm text-sm-right">
                <a class="btn btn-success" href="{{ route('meme.create') }}">@lang('app.new')</a>
            </div>
        </div>
        <table>
            <tr>
                <th>#</th>
                <th class="text-left">@lang('app.name')</th>
                <th>@lang('app.src')</th>
                <th>@lang('app.type')</th>
                <th>@lang('app.permanent')</th>
                <th>@lang('app.edit')</th>
                <th>@lang('app.delete')</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-left">{{ $item->name }}</td>
                    <td class="src">
                        <a href="{{ $item->original_url }}" title="{{ $item->src->name }}" target="_blank">
                            <img src="{{ $item->src->logo_url }}">
                        </a>
                    </td>
                    <td>
                        <i class="fas fa-lg fa-{{ $item->type->alias }}" title="@lang('app.' . $item->type->alias)"></i>
                    </td>
                    <td>
                        @if($item->permanent)
                            <i class="far fa-lg fa-check-circle text-success" title="@lang('app.yes')"></i>
                        @else
                            <i class="far fa-lg fa-times-circle text-danger" title="@lang('app.no')"></i>
                        @endif
                    </td>
                    <td>
                        <a class="fas fa-lg fa-edit" href="{{ route('meme.edit', $item->id) }}" title="@lang('app.edit')"></a>
                    </td>
                    <td>
                        <form action="{{ route('meme.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fas fa-lg fa-trash-alt text-danger btn-delete" onclick="return confirm('@lang('app.sure')');" title="@lang('app.delete')"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $items->links() }}
    </div>
@endsection