@extends ('layouts.master')

@section('scripts')

<script> 
    var json = {!! json_encode($json) !!};
</script>
<script src="/js/locationsMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('APP_GOOGLE_MAPS') }}&callback=myMap"></script>

@endsection

@section('content')

<div class="container text-center mt-4 mb-0">
    <h2 class="font-italic text-white">Products available at the following locations:</h2>
    <!-- <div class="card" style="width: 18rem;">
        <a href="http://evrgrassfed.com" target="_blank"><img class="card-img-top" src="/images/echoValley.jpg" alt="Card image cap"></a>
        <div class="card-body">
            <h5 class="card-title">Echo Valley Ranch</h5>
            
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">7074 Side Rd 15</li>
            <li class="list-group-item">Moorefield, ON</li>
            <li class="list-group-item">N0G 2K0</li>
        </ul>
        <div class="card-body">
            <a href="http://evrgrassfed.com" class="card-link">Website Link</a>
        </div>
    </div> -->


    <div class="row retailRow mt-4">

        @foreach ($json['locations'] as $location)

            
            
            <div class="col-sm-6 col-md-4 mb-5">
                <div class="card border-warning mx-auto">
                <a href="{{ $location['website'] }}" target="_blank"><img class="card-img-top img-fluid" style="max-height:300px;" src="{{ $location['image'] }}" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $location['name'] }}</h5>
                        <p class="card-text">{{ $location['address'] }}</p>
                        @if ($location['id'] == 3)
                        <p class="card-text font-italic">*Available by appointment only*</p>
                        @endif
                    </div>
                    <div class="card-footer bg-warning d-flex justify-content-around">
                        <a href="{{ $location['website'] }}" target="_blank">
                            <small class="text-muted">Website</small>
                        </a>
                        <a href="#mapHeader" onclick="mapClick({{ $location['id'] }})">
                            <small class="text-muted">Map</small>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- <div class="col-8"></div>
        <h3 class="mx-auto mt-0 font-italic text-white">And of course...</h3>
        <div class="col-sm-12 sm-mx-auto card border-warning mt-2 px-0">
            
                <div class="card-img-top" style="background: url(/images/honeycomb-banner2.jpg);">
                    <div class="container" id="logoContainer">
                        <img src="/images/logo.jpg" alt="Logo" id="logo" class="mx-auto">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Beekeeping It Real</h5>
                    <p class="card-text">287 Northumberland St, Ayr, ON N0B 1E0</p>
                    <p class="card-text font-italic">*Available by appointment only*</p>
                </div>
                <div class="card-footer bg-warning ">
                    <a onclick="mapClick(7)" href="#mapHeader">
                        <small class="text-muted">Map</small>
                    </a>
                </div>
        </div> -->
        
    </div>
</div>  {{-- end Container --}}

<div class="container text-center my-4">
    <h1 id="mapHeader" style="display:inline;" class="text-white stroke">Retail Locations Map</h1>
    <span style="display:inline;">
        <button onclick="myMap()" class="btn btn-dark border-info bg-info ml-4 mb-3">
            <small class="text-white">Reset Map</small>
        </button>
    </span>
    <div id="googleMap" class="mx-auto col-12" style="width:100%;height:60vh"></div>
</div>
@endsection