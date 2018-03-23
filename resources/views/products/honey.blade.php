@extends ('layouts.master')

@section('assets')
    <link rel="stylesheet" href="/css/blog.css">
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <h2 class="pb-3 mb-4 font-italic border-bottom mt-4 text-center text-warning">
            Raw Honey
          </h2>
          <div class="blog-post">
           
           <div class="row">
             <div class="col-12 text-center">
               <p>Our raw honey is sold in 500g, 1kg, and 3kg quantities.  Larger quantities are also available upon request.</p>
             </div>
             <div class="col-12 col-sm-8 offset-sm-2">
               <img id="honeyPic" src="/images/honey.jpg" alt="honey" class="img-responsive">
             </div>
           </div>
         </div>


          <h2 id="natureOf" class="pb-3 mb-4 font-italic border-bottom mt-4 text-center text-warning">
            {{ $json['intro']['title'] }}
          </h2>

          <div class="blog-post">
           
            <div class="row">
              <div class="col-4">
                <p>{{ $json['intro']['text'] }}</p>
              </div>
              <div class="col-8">
                <img src="/images/honey.jpg" alt="honey" class="img-responsive" width="480px">
              </div>
            </div>

            <h4 class="pb-1 mb-2 font-italic mt-4 text-warning">
              {{ $json['p1']['title'] }}
            </h4>
            <p>
              {{ $json['p1']['text'] }}
            </p>
                
            <h4 class="pb-1 mb-2 font-italic mt-4 text-warning">
              {{ $json['p2']['title'] }} 
            </h4>
            <p>
              {{ $json['p2']['text'] }}
            </p>
            
            <h4 class="pb-1 mb-2 font-italic border-bottom mt-4 text-warning">
              {{ $json['facts']['title'] }}
            </h4>
            <ul>
              @foreach ($json['facts']['list'] as $fact)
                <li>{{ $fact }}</li>
              @endforeach
            </ul>
          </div><!-- /.blog-post -->
      </div> <!-- END COL -->
    </div> <!-- END ROW -->
</div>

@endsection