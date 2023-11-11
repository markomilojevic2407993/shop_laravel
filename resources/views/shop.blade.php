@extends('layout')
@section('title')
            Shop
@endsection
@section('head')

@foreach($products as $product) 

@if($product=='samsong' || $product=='sony')
<p class="text-center">{{ $product }}-SUPER SNIZENJE</p>

@else
<p class="text-center">{{ $product }}</p>
@endif

@endforeach

@endsection
