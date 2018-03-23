@extends ('layouts.master')

@section('assets')
    <link rel="stylesheet" href="/css/blog.css">
@section('content')
<div class=" container">
    <h4>Beeswax:</h4>
    <p>{{ $json['p1'] }}</p>
    <p>{{ $json['p2'] }}</p>
    <p>{{ $json['p3'] }}</p>
</div>
@endsection