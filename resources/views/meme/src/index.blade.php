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
                <th>@lang('app.logo')</th>
                <th>@lang('app.name')</th>
                <th>@lang('app.alias')</th>
                <th>@lang('app.url')</th>
                <th>@lang('app.edit')</th>
                <th>@lang('app.delete')</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="logo">
                        <img src="{{ $item->logo_url }}">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->alias }}</td>
                    <td>
                        <a class="external_link" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a>
                    </td>
                    <td>
                        <a class="fas fa-lg fa-edit" href="{{ route('src.edit', $item->id) }}" title="@lang('app.edit')"></a>
                    </td>
                    <td>
                        <form action="{{ route('src.destroy', $item->id) }}" method="POST">
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