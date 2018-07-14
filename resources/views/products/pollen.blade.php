@extends ('layouts.master')

@section('content')
<div class="infoPage container">
    <h2 class="pb-3 mb-4 border-bottom mt-4 text-center">Pollen:</h2>
    <div class="row">
        <div class="col-xl-6">
            <p>Bee pollen harvest from our hives is fresh/frozen and sold by the pound.</p>
        
            <h4>Benefits of bee pollen </h4>
            <ol class="">
                @foreach ($json['benefits'] as $benefit)
                    <li class="">{{ $benefit }}</li>
                @endforeach
            </ol>
            <h4>{{ $json['p1']['title'] }}</h4>
            <p class="mt-3">{{ $json['p1']['text'] }}</p>
        </div>
        <div class="col-xl-6 d-flex align-items-center text-center">
            <img src="/images/pollen_BR.jpg" class="mx-auto my-5" alt="pollen" style="width: 100%; max-width: 650px; height: auto;">
        </div>
    </div>
</div>
@endsection