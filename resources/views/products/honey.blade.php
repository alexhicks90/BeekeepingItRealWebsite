@extends ('layouts.master')

@section('content')
    
<div class="infoPage container">
    <div class="row">
        <div class="col-md-12">

            <h2 id="natureOf" class="pb-3 mb-4 border-bottom mt-4 text-center">
              {{ $json['intro']['title'] }}
            </h2>

            <div class="row">
              <div class="col-lg-5">
                <p class="font-weight-bold text-warning" style="font-size: 1.2rem;">{{ $json['intro']['text'] }}</p>

                <p>{{ $json['intro']['listIntro'] }}</p>
                <ul>
                  @foreach ($json['intro'] ['list'] as $item)
                    <li>{{ $item }}</li>
                  @endforeach
                </ul>
                <p>{{ $json['intro']['text2'] }}</p>
              </div>
              <div class="col-lg-7">
                <div class="text-center pr-4">
                  <img src="/images/honey.jpg" alt="honey" class="img-responsive mr-2" width="475px">
                </div>
                
              </div>
            </div>

            <h4 class="border-bottom">
              {{ $json['p1']['title'] }}
            </h4>
            <ul>
                @foreach ($json['p1'] ['text'] as $item)
                  <li class="mt-2">{{ $item }}</li>
                @endforeach
            </ul>
            
                
            <h4 class="border-bottom">
              {{ $json['p2']['title'] }} 
            </h4>
            <ul>
                @foreach ($json['p2'] ['text'] as $item)
                  <li class="mt-2">{{ $item }}</li>
                @endforeach
            </ul>
            
            <h4 class="border-bottom">
              {{ $json['facts']['title'] }}
            </h4>
            <ul>
              @foreach ($json['facts']['list'] as $fact)
                <li class="mt-2">{{ $fact }}</li>
              @endforeach
            </ul>

      </div> <!-- END COL -->
    </div> <!-- END ROW -->
</div>

@endsection