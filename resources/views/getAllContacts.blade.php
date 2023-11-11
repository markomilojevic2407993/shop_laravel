@extends('layout')
@section('head')
@foreach($allcontacts as $contact)
<div class="container">
<p>{{$contact['email']}}</p>
<p>{{$contact['title']}}</p>
<p>{{$contact['message']}}</p>
@endforeach
</div>

@endsection