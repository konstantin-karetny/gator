@extends('layouts.app')
@section('content')
    <div class="row items">
        @foreach ($items as $item)
            <article class="item col-12{{$item->liked ? ' liked' : '' }}">
                <!--header>
                    <h1>{{ $item->name }}</h1>
                </header>
                <div class="body">
                    @if ($item->type->alias == 'video')
                        <video preload="auto" poster="{{ $item->preview }}" controls loop muted>
                            <source src="{{ $item->body }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ $item->body }}">
                    @endif
                </div-->
                <footer class="row">
                    <div class="col-6 text-left">
                        <div class="src">
                            <a href="{{ $item->original_url }}" class="external-link" title="@lang('app.src')" target="_blank">
                                <img src="{{ $item->src->logo_url }}">
                                <span>{{ $item->src->name }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="like">
                            <div class="btn-like fa-lg fa-heart {{ $item->liked ? 'fas' : 'far' }}" onclick="IndexFront.{{ $item->liked ? 'dis' : '' }}like({{ $item->getKey() }})" title="@lang($item->liked ? 'app.dislike' : 'app.like')"></div>
                            <div class="count">{{ $item->likes()->count() }}</div>
                        </div>
                        <div class="share">
                            <div class="btn-share fas fa-lg fa-share-alt" title="@lang('app.share')"></div>
                        </div>
                        <div class="menu">
                            <div class="btn-menu fas fa-lg fa-ellipsis-h"></div>
                        </div>
                    </div>
                </footer>
            </article>
        @endforeach
        {{ $items->links() }}
    </div>
@endsection