@extends('layout')
@section('title')
            Shop
@endsection
@section('head')

@foreach($allProducts as $product)

<div class="container">
    <h4>{{$product['name']}}</h1>
    <img src="{{$product['img']}}" alt="" width="250px" height="250px">
    <p>{{$product['description']}}</p>
    <p>{{$product['price']}}</p>
    <hr>
</div>
@endforeach
@endsection
