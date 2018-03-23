@extends ('layouts.master')

@section('assets')
    <link rel="stylesheet" href="/css/blog.css">
@section('content')
<div class=" container">
    <h2>Pollen:</h2>
    <p>Bee pollen harvest from our hives is fresh/frozen and sold by the pound.</p>
    <h5>Benefits of bee pollen </h5>
    <ol class="list-group">
        @foreach ($json['benefits'] as $benefit)
            <li class="list-item">{{ $benefit }}</li>
        @endforeach
    </ol>
    <p class="mt-3">{{ $json['paragraph'] }}</p>
</div>
@endsection