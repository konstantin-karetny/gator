@extends('layouts.app')
@section('content')
    <div class="{{ $class }} container">
        <div class="row">
            @foreach ($items as $item)
                <div class="item col-12">
                    <header>
                        <h1>
                            {!! $item->name !!}
                        </h1>
                    </header>
                    <div class="body">
                        @if ($item->video)
                            <video preload="auto" poster="{{ $item->image }}" controls loop muted>
                                <source src="{{ $item->video }}" type="video/mp4">
                            </video>
                        @else
                            <img src="{{ $item->image }}">
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
                        <a href="{{ $item->url }}" target="_blank">
                            <img src="https://assets-9gag-fun.9cache.com/s/fab0aa49/deda323611ca8f5cb81c52136e6b0948fad550c6/static/dist/core/img/favicon.ico"><!--
                         --><span>
                                {{ $item->url }}
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection