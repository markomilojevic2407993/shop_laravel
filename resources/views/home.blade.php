@extends('layout')

@section('head')
@if($time>=0 && $time <=12)
<p class="container text-center">Dobro jutro {{$time}}</p>
@elseif($time>=12 && $time <=18)
<p class="container text-center">Dobar dan {{$time}}</p>
@else
<p class="container text-center">Dobro vece{{$time}}</p>
@endif

@endsection