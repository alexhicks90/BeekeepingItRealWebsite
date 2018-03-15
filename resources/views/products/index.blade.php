@extends ('layouts.master')

@section('assets')
    <link rel="stylesheet" href="/css/carousel.css">
@section('content')

@section('content')
<div class="text-white container">
    <h4>Products:</h4>
    <p>Something something, our products are great and natural and stuff!</p>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="/images/honey.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Raw Honey</h1>
                <h4>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</h4>
                <p><a class="btn btn-lg btn-warning" href="/products/raw-honey" role="button">Learn More</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="/images/beeswax.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Beeswax</h1>
                <h4>Our beeswax is melted, strained, cleaned, and ready for use.  </h4>
                <p><a class="btn btn-lg btn-warning" href="/products/beeswax" role="button">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="third-slide" src="/images/pollen.jpg" alt="Pollen">
            <div class="container">
              <div class="carousel-caption text-dark">
                <h1 class="strokeWhite">Pollen</h1>
                <h4 class="strokeWhite">Bee pollen harvested from our hives comes fresh/frozen and is sold by the pound.</h4>
                <p><a class="btn btn-lg btn-warning" href="/products/pollen" role="button">Learn More</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">  
          <img class="fourth-slide" src="/images/propolis.jpg" alt="Propolis">        
            <div class="container">
              <div class="carousel-caption text-dark">
              <h1 class="stroke">Propolis</h1>
                <h4 class="stroke">Bee pollen harvested from our hives comes fresh/frozen and is sold by the pound.</h4>
                <p><a class="btn btn-lg comingSoonBtn">Coming Soon!</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="fifth-slide" src="/images/nucs.jpg" alt="Nucs">
            <div class="container">
              <div class="carousel-caption text-warning">
              <h1 class="strokeBlack">Nucs/Honey Bee Colonies</h1>
                <h4 class="strokeBlack">Bee pollen harvested from our hives comes fresh/frozen and is sold by the pound.</h4>
                <p><a class="btn btn-lg text-white comingSoonBtn">Coming Soon!</a></p>
              </div>
            </div>
          </div>
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


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8v9v4PwAHnALupYDQoAAAAABJRU5ErkJggg==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mP8v9v4PwAHnALupYDQoAAAAABJRU5ErkJggg==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNUlWL4DwAB6wFAq4WkvAAAAABJRU5ErkJggg==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
</div>
@endsection