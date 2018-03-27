@extends ('layouts.master')

@section('content')
<div class="infoPage container">

    <h2 class="pb-3 mb-4 border-bottom mt-4 text-center">
        {{ $json['intro']['title'] }}
    </h2>
    <div class="row">
        <div class="col-6">
            @foreach ($json['paragraphs'] as $item)
                <h4 class="text-center">{{ $item['title'] }}</h4>
                <p>{{ $item['text'] }}</p>
            @endforeach
        </div>
        <div class="col-6">
            <img src="/images/hi.jpg" alt="beeswax">
        </div>
    </div>
</div>
@endsection