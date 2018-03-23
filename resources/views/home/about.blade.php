@extends ('layouts.master')

@section('content')
<div class="container text-white text-center">

    <h2 id="aboutTitle" class="stroke2 display-3 my-3 my-sm-5 font-italic">David's Story</h2>
    <hr style="border-bottom: 3px solid orange;">

    @foreach ($json['items'] as $item)      
        <div class="row">
            <div class="col-12 col-sm-6 d-flex align-items-center h100 my-sm-5 {{ $item['imgDivClasses'] }}">
                <img src="images/{{ $item['image'] }}" class="img-responsive aboutPic mx-auto" alt="{{ $item['imageAlt'] }}">
            </div>
            <div class="col-12 col-sm-6 d-flex align-items-center h100 mt-1 mb-3 my-sm-5 {{ $item['textDivClasses'] }}">
                <blockquote class="blockquote mx-auto px-3">
                    <p>{{ $item['text'] }}</p>
                </blockquote>    
            </div>
        </div>
    @endforeach
</div>
@endsection