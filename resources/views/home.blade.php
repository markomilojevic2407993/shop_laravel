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


<form class="container" action="/send-contact" method="post">
    <!--@csrf  token kao zastitia forme obavezna je za psot metode-->
@csrf 
<!--trazenje errors u laravelu-->
@if($errors->any())
<p>{{$errors->first()}}</p>
@endif
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="title" placeholder="title"><br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea><br>
    <button class="btn btn-danger" type="submit">Send</button>
</form>


@endsection