@extends ('layouts.master')

@section('assets')
    <link rel="stylesheet" href="/css/carousel.css">
@section('content')

@section('content')
<div class="text-white">


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          @foreach ($json['products'] as $product)
            <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"></li>
          @endforeach
      </ol>

      <div class="carousel-inner">

          @foreach ($json['products'] as $product)
            <div class="carousel-item @if($loop->index == 0) active @endif">
                <img class="" src="/images/{{ $product['carouselImage'] }}" alt="{{ $product['alt'] }}">
                <div class="container">
                  <div class="carousel-caption {{ $product['textColor'] }}">
                    <h1 class="{{ $product['stroke'] }}">{{ $product['name'] }}</h1>
                    <h4 class="{{ $product['stroke'] }}">{{ $product['shortDesc'] }}</h4>
                    <p><a class="btn btn-lg {{ $product['btnClass'] }}" href="{{ $product['url'] }}" role="button">{{ $product['btnText'] }}</a></p>
                  </div>
                </div>
            </div>
          @endforeach
      </div> 
    
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <div class="container marketing">

    {{--<h1 class="text-center display-4 stroke2" style="text-decoration: underline;">Products</h1>--}}
      <!-- Three columns of text below the carousel -->
      <div class="row">
        @foreach ($json['products'] as $product)
          <div class="col-lg-4">
            <div class="productContainer">
              <div class="product py-2">
                <img class="rounded-circle" src="/images/{{ $product['img'] }}" alt="{{ $product['alt'] }}" width="140" height="140">
                <h2>{{ $product['name'] }}</h2>
                <p>{{ $product['shortDesc'] }}</p>
                <p><a class="btn {{ $product['btnClass'] }}" href="{{ $product['url'] }}" role="button">@if($product['btnText'] == "Learn More") Product Info &raquo;@else Coming Soon! @endif</a></p>
              </div>
            </div>
          </div><!-- /.col-lg-4 -->
          @if ($loop->iteration % 3 == 0)  
            <hr class="featurette-divider">
          @endif
        @endforeach
      </div><!-- /.row -->
  </div>
{{--
  @foreach ($json['products'] as $product)
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 @if($loop->iteration % 2 == 0) order-md-2 @endif">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 @if($loop->iteration % 2 == 0) order-md-1 @endif">
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>
  @endforeach

  <hr class="featurette-divider">
--}}
</div>
@endsection