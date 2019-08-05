@extends('layouts.app')
@section('content')
    <div class="row items">
        @foreach ($items as $item)
            <div class="item col-12">
                <header>
                    <h1>
                        {{ $item->name }}
                    </h1>
                </header>
                <div class="body">
                    @if ($item->type_id == 3)
                        <video preload="auto" poster="{{ $item->poster }}" controls loop muted>
                            <source src="{{ $item->body }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ $item->body }}">
                    @endif
                </div>
                @if ($item->tags)
                    <ul class="tags">
                        @foreach ($item->tags as $tag)
                            <li>
                                <a href="/">#{{ $tag['key'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <div class="src">
                    <a href="http://9gag.com/gag/{{ $item->original_id }}" target="_blank">
                        <img src="{{ $srcs[$item->src_id]->favicon }}"><!--
                     --><span>http://9gag.com/gag/{{ $item->original_id }}</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection