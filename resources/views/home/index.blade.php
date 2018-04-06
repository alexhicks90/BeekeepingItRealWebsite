@extends ('layouts.master')

@section('assets')
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
@endsection

@section('scripts')
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="/js/slickScript.js"></script>
@endsection


@section('content')

<div id="introDiv" class="jumbotron text-warning py-4" style="border-bottom: 4px solid #ffc107;">
    <div class="container">
      <div class="row">
        <h1 id="homeTitle" class="col-11 display-2 text-white stroke2">Beekeeping It Real</h1>
        <div class="col-md-6 offset-lg-1 d-flex align-items-center h100">
          <img id="introPic" class="img img-fluid mt-2 pb-3" src="images/DSC_0049.JPG" alt="David Stotesbury">
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-center h100">
          <p id="introBlurb" class="lead">Since 2011, Beekeeping It Real has been providing Ayr, Kitchener/<wbr>Waterloo, Paris, Elmira 
              and surrounding areas with quality raw honey and various other hive products.  Founded by David 
              Stotesbury, the goal in mind was to produce products as Mother Nature intended!</p>
          <!-- <p><a class="btn btn-warning btn-lg text-dark" href="/about" role="button">David's Story &raquo;</a></p>
          <p><a class="btn btn-warning btn-lg text-dark" href="/products/info" role="button">Learn about raw honey &raquo;</a></p> -->
        </div>
        <div class="col-sm-6 offset-lg-1 text-center">
          <p><a class="btn btn-warning btn-lg text-dark" href="/about" role="button">David's Story &raquo;</a></p>
        </div>
        <div class="col-sm-4 text-center">
          <p><a class="btn btn-warning btn-lg text-dark" href="/products/raw-honey#natureOf" role="button">Learn more about raw honey &raquo;</a></p>
        </div>
      </div>
    </div>
</div>

<div id="homeContainer" class="mx-5 pb-4 mb-2">
  <div class="row">

    <div id="homeLinksContainer" class="col-12 order-lg-12 col-lg-4 mx-auto mb-4 mb-lg-0">
      <div id="homeLinksJumbo" class="jumbotron row text-light">

          <div class="col-12">
            <h2 class="display-4 text-center">Proud Member of the Ontario Beekeepers' Association</h2>
            <hr class="my-4 bg-light">
            <p class="lead text-center">Check us out:</p>    
          </div>

          <div class="col-12 slickCarousel text-center">
              @foreach ($json['carousel'] as $item)
                <div>
                  <h6>{{ $item['title'] }}</h6>
                  <small>{{ $item['subtitle'] }}</small>
                  <a href="{{ $item['url'] }}" target="_blank"><img class="slickImg img-fluid" src="images/{{ $item['image'] }}" alt="{{ $item['imageAlt'] }}"></a>
                </div>
              @endforeach
          </div> {{-- END slick carousel --}}

      </div> {{-- END homeLinksJumbo --}}
    </div> {{-- END homeLinksContainer --}}


    <div class="col-12 order-lg-1 col-lg-8 mx-auto">
      <div id="instaColumn" class="bg-warning mr-1 text-center">
          <a href="https://www.instagram.com/beekeeping_it_real/" target="_blank">
            <img class="img-fluid mt-2" src="images/instagram.png" alt="Instagram Logo" style="max-height: 165px;">
          </a>
          <a class="text-black" href="https://www.instagram.com/beekeeping_it_real/" target="_blank">
            <p class="text-black font-weight-bold font-italic">beekeeping_it_real</p>
          </a>

          <div class="row matchedHeightRow">
            @foreach($instagrams as $instagram)
            <div class="col-12 col-md-6">
              <div class="card instaCard mb-3 mx-auto mx-xl-1">

                  <div class="instaPic mx-auto">
                    <a href="{{ $instagram->link }}" target="_blank">
                      <img class="card-img-top darken img-thumbnail" src="{{ $instagram->images->standard_resolution->url }}" alt="Card image cap">

                      @if ( property_exists($instagram, 'videos')) 
                      <div class="vidLink">
                          <i class="fa fa-video-camera"></i><span></span>
                      </div>
                      @endif

                      <div class="links">
                        <i class="fa fa-heart"></i><span>{{ $instagram->likes->count }}</span>
                        <i class="fa fa-comment"></i><span>{{ $instagram->comments->count }}</span>
                      </div>
                    </a>
                  </div>
                
                  <div class="card-body">
                      
                      @if ($instagram->caption != null)
                          <p class="card-text text-white">{{ $instagram->caption->text }}</p>
                      @else
                          <p class="card-text text-white">No caption</p>
                      @endif

                      <h5 class="instaDate text-right">{{ date('M d, Y', $instagram->created_time) }}</h5>
                  </div>
              </div>
            </div>
            @endforeach
          </div>

          <h5 class="text-black text-center pb-1">Want more?
            <a class="text-black" href="https://www.instagram.com/beekeeping_it_real/" target="_blank">
                Click here!
            </a>
          </h5>

      </div> {{-- End instaColumn --}}
    </div>
  </div> {{-- End Row --}}
</div> {{-- END HomeContainer --}}

<div style="border-top: 4px solid #ffc107;">
  <div class="mx-5">
    <h2 class="text-white ml-2 mt-4">We Bee Beekeepin'!</h2>
      <div class="clearfix mb-3" style="height: 45vh; min-height: 250px; background: 
          url(images/hives.jpg) no-repeat center center;
          background-size: cover;">
      </div>
  </div>
</div>
@endsection