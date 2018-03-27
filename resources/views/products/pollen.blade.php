@extends ('layouts.master')

@section('content')
<div class="infoPage container">
    <h2 class="pb-3 mb-4 border-bottom mt-4 text-center">Pollen:</h2>
    <p>Bee pollen harvest from our hives is fresh/frozen and sold by the pound.</p>

    <h4>Benefits of bee pollen </h4>
    <ol class="">
        @foreach ($json['benefits'] as $benefit)
            <li class="">{{ $benefit }}</li>
        @endforeach
    </ol>
    
    <p class="mt-3">{{ $json['paragraph'] }}</p>
</div>
@endsection