@extends('layout')
@section('title')
            Contact
@endsection
@section('head')
<h1 class="text-center">PLACE FOR YOUR MESSAGE</h1>
<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-lg btn-success" type="submit">SEND</button>
</div><hr>
<div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7912.75029842369!2d20.55505756324042!3d45.47827001818254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1699629615116!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
@endsection
