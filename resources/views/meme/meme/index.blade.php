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
                <th>@lang('app.name')</th>
                <th>@lang('app.alias')</th>
                <th>@lang('app.url')</th>
                <th>@lang('app.delete')</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><a href="{{ route('meme.edit', $item->id) }}" title="@lang('app.edit')">{{ $item->name }}</a></td>
                    <td>{{ $item->alias }}</td>
                    <td><a class="external_link" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></td>
                    <td>
                        <form action="{{ route('meme.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fas fa-trash-alt text-danger btn-delete" onclick="return confirm('@lang('app.sure')');" title="@lang('app.delete')"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $items->links() }}
    </div>
@endsection