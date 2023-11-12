@extends('layout')

@section('head')
@if($time>=0 && $time <=12)
<p class="container text-center">Dobro jutro {{$time}}</p>
@elseif($time>=12 && $time <=18)
<p class="container text-center">Dobar dan {{$time}}</p>
@else
<p class="container text-center">Dobro vece{{$time}}</p>
@endif

@foreach($products as $product)
<div class="container " style="border:1px solid black; width:320px; margin:4px;background-color:gray">
<h2>{{$product->name}}</h2>
<img src="{{$product->img}}" alt="" width="300px" height="300px" >
<p>{{$product->description}}</p>
<p>{{$product->amount}}</p>
</div>
@endforeach


@endsection