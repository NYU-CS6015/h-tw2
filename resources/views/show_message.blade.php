@extends('layouts.app')

@section('content')

<style>
.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
</style>

<body>

<div class="container-fluid bg-1 text-center">
  <h3>Twitter</h3>
  <h3>I'm an adventurer</h3>
</div>

<div id="section">
      @foreach($messages as $message)
      <p>------------------- A new message -------------------------</p>
      <p>Content:{{$message->content}}</p>
      <br><br>
     @endforeach
</div>




@endsection