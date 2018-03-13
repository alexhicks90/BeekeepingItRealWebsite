@extends ('layouts.master')

@section('assets')
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
@endsection

@section('scripts')
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slickCarousel').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 700,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
    });
</script>
@endsection


@section('content')

<div class="jumbotron text-warning py-4" style="border-bottom: 4px solid #ffbb33;">
    <div class="container">
      <div class="row">
        <h1 id="homeTitle" class="col-11 display-2 text-white stroke2">Beekeeping It Real</h1>
        <div class="col-md-6 offset-lg-1 d-flex align-items-center h100">
          <img id="introPic" class="img img-fluid mt-2 pb-3" src="images/DSC_0049.JPG" alt="David Stotesbury">
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-center h100">
          <p id="introBlurb" class="lead">Since 2011, Beekeeping It Real has been providing Ayr, Kitchener/Waterloo, Paris, Elmira 
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

<div id="homeContainer" class="mx-5">
  <div class="row">
    <div class="col-12 col-lg-8">
      <div id="homeLinksContainer" class="jumbotron row text-light mr-1">
          <div class="col-12">
            <h2 class="display-4 text-center">Member of the Ontario Beekeepers Association</h2>
            <hr class="my-4 bg-light">
            <p class="lead text-center">Check us out:</p>
            
          </div>
          <div class="col-12 slickCarousel text-center">
            <div>
              <h6>Ontario Beekeepers Association</h6>
              <a href="http://www.ontariobee.com/sales-and-services/where-to-buy-honey-products/davestotes" target="_blank"><img class="slickImg img-fluid" src="images/oba.png" alt="OBA Logo"></a>
            </div>
            <div>
              <h6>University of Guelph Video Series</h6>
              <a href="http://www.uoguelph.ca/honeybee/videos.shtml" target="_blank"><img class="slickImg img-fluid" src="images/guelphLogo.jpg" alt="UoG Logo"></a>
            </div>
            <div>
              <h6>Toronto Star Article</h6>
              <a href="https://www.thestar.com/life/homes/2016/05/09/innovation-bringing-back-the-bees.html" target="_blank"><img class="slickImg img-fluid" src="images/theStar.png" alt="Toronto Star Logo"></a>
            </div>
            <div>
              <h6>Betta Bees Research Limited, NZ</h6>
              <p>Newsletter Issue: 12/2012</p>
              <a href="http://www.bettabees.co.nz/file/Betta%20Bees/News%20Letters/2012_12.pdf" target="_blank"><img class="slickImg img-fluid" src="images/bettaLogo.png" alt="University of Guelph Logo"></a>
            </div>
            <div>
              <h6>Speaker at Eastern Apiculture Society, 2015</h6>
              <a href="http://www.easternapiculture.org/conferences/conference-archive/eas-2015/2015-speakers.html " target="_blank"><img class="slickImg img-fluid" src="images/EAS_logo.png" alt="University of Guelph Logo"></a>
            </div>
            <div>
              <h6>Betta Bees Research Limited, NZ</h6>
              <p>Newsletter Issue: 03/2013</p>
              <a href="http://www.bettabees.co.nz/file/Betta%20Bees/News%20Letters/2013_03(1).pdf" target="_blank"><img class="slickImg img-fluid" src="images/bettaLogo.png" alt="University of Guelph Logo"></a>
            </div>
        </div>
  {{--
          <div class="col-12"> 
            <img class="img-fluid" src="images/dave.jpg" alt="David Stotesbury Pic">
          </div> 
  --}}
      </div>
    </div>

    
    <div id="instaColumn" class="col-10 col-lg-4 bg-warning mx-auto">

      <a href="https://www.instagram.com/beekeeping_it_real/" target="_blank">
        <img class="img-fluid mt-2" src="images/instagram.png" alt="Instagram Logo">
      </a>
      <a href="https://www.instagram.com/beekeeping_it_real/" target="_blank">
        <p class="font-weight-bold font-italic">beekeeping_it_real</p>
      </a>

      @foreach($instagrams as $instagram)
        <div class="card instaCard mb-3">
    
            <div class="insta">
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
                <h5 class="card-title">{{ date('M j, Y', $instagram->created_time) }}</h5>
                
                @if ($instagram->caption != null)
                    <p class="card-text">{{ $instagram->caption->text }}</p>
                @else
                    <p class="card-text">No caption</p>
                @endif
            </div>
        </div>
      @endforeach

      <h5 class="text-light text-center pb-1">Want more?
        <a href="https://www.instagram.com/beekeeping_it_real/" target="_blank">
            Click here!
        </a>
      </h5>

  </div> {{-- End Row --}}

</div> {{-- End Container --}}





<h2 class="text-white">We Bee Beekeepin'!</h2>
<div class="clearfix mb-3" style="height: 45vh; min-height: 250px; background: 
    url(images/hives.jpg) no-repeat center center;
    background-size: cover;">
</div>
</div>
@endsection