@extends ('layouts.master')

@section('content')
    @foreach($instagrams as $instagram)
    <div class="card col-4" style="width: 18rem; height: 20%; display: inline-block;">

        <a href="{{ $instagram->link }}" target="_blank"><img class="card-img-top insta" src="{{ $instagram->images->standard_resolution->url }}" alt="Card image cap"></a>
        <div class="card-body">
            <h5 class="card-title">{{ $instagram->created_time }}</h5>
            <span>Likes: {{ $instagram->likes->count }}</span>
            @if ($instagram->caption != null)
                <p class="card-text">{{ $instagram->caption->text }}</p>
            @else
                <p class="card-text">No caption</p>
            @endif
        </div>

    </div>
    @endforeach
@endsection