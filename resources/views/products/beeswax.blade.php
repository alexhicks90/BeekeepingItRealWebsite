@extends ('layouts.master')

@section('content')
<div class="infoPage container">

    <h2 class="pb-3 mb-4 border-bottom mt-4 text-center">
        {{ $json['intro']['title'] }}
    </h2>
    <div class="row">
        <div class="col-12 col-xl-6">
            @foreach ($json['paragraphs'] as $item)
                <h4>{{ $item['title'] }}:</h4>
                <p>{{ $item['text'] }}</p>
            @endforeach
        </div>
        <div class="col-12 col-xl-6 text-center">
            <img src="/images/beeswax.jpg" alt="beeswax" class="img-responsive mt-5" style="width: 100%; max-width: 600px; height: auto;">
        </div>
    </div>
</div>
@endsection