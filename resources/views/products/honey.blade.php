@extends ('layouts.master')

@section('content')
    
<div class="infoPage container">
    <div class="row">
        <div class="col-md-12">

            <h2 id="natureOf" class="pb-3 mb-4 border-bottom mt-4 text-center">
              {{ $json['intro']['title'] }}
            </h2>

            <div class="row">
              <div class="col-4">
                <p>{{ $json['intro']['text'] }}</p>
              </div>
              <div class="col-8">
                <img src="/images/honey.jpg" alt="honey" class="img-responsive" width="480px">
              </div>
            </div>

            <h4>
              {{ $json['p1']['title'] }}
            </h4>
            <p>
              {{ $json['p1']['text'] }}
            </p>
                
            <h4>
              {{ $json['p2']['title'] }} 
            </h4>
            <p>
              {{ $json['p2']['text'] }}
            </p>
            
            <h4 class="border-bottom">
              {{ $json['facts']['title'] }}
            </h4>
            <ul>
              @foreach ($json['facts']['list'] as $fact)
                <li>{{ $fact }}</li>
              @endforeach
            </ul>

      </div> <!-- END COL -->
    </div> <!-- END ROW -->
</div>

@endsection