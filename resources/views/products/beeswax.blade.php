@extends ('layouts.master')

@section('content')
<div class="infoPage container">

    <h2 class="pb-3 mb-4 border-bottom mt-4 text-center">
        {{ $json['intro']['title'] }}
    </h2>
    <div class="row">
        <div class="col-12 col-xl-6 h100">
            @foreach ($json['paragraphs'] as $item)
                <h4>{{ $item['title'] }}:</h4>
                <p>{{ $item['text'] }}</p>
            @endforeach
        </div>
        <div class="col-12 col-xl-6 d-flex align-items-center">
            <img src="/images/beeswax02.jpg" alt="beeswax" class="img-responsive mx-auto my-5" style="width: 100%; max-width: 600px; height: auto;">
        </div>
    </div>
</div>
@endsection