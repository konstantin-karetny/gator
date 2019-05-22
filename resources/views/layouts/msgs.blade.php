<div class="container msgs">
    <div>
        <ul>
            @foreach ($errors->all() as $msg)
                <li class="alert alert-danger">{{ $msg }}</li>
            @endforeach
            @if (Session::get('msg'))
                <li class="alert alert-success">{{ Session::get('msg') }}</li>
            @endif
        </ul>
    </div>
</div>