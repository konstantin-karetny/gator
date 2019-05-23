@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form-group row">
            <div class="header col-sm">
                <h1>@lang('app.srcs')</h1>
            </div>
            <div class="btns col-sm text-sm-right">
                <a class="btn btn-success" href="{{ route('src.create') }}">@lang('app.new')</a>
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
                    <td><a href="{{ route('src.edit', $item->id) }}" title="@lang('app.edit')">{{ $item->name }}</a></td>
                    <td>{{ $item->alias }}</td>
                    <td><a href="{{ $item->url }}">{{ $item->url }}</a></td>
                    <td>
                        <form action="{{ route('src.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fas fa-user"></button>
                        </form>
                        <i class="fab fa-github-square"></i>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $items->links() }}
    </div>
@endsection