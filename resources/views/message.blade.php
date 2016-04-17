@extends('layouts.app')

@section('content')
<html>
<head>
<style>
input[type="text"]
{
  position: relative;
  height:200px;
  width:500px;
  display:block;
  left:0px;
  top:5px;
  margin-bottom:10px;
  background-color:white;
}

</style>
</head>
<body>
<h3> Edit your message here:</h3>
<form name="input" action="{{ url('/message') }}" method="post">
	{!! csrf_field() !!}
	<div class="row">
		<div class="col-md-3 col-md-offset-2">
			<h4>Location:</h4>
			<select name="location_id">
				@foreach($locations as $location)
					<option value="{{ $location->id}}">{{$location->value}}</option>
				@endforeach
			</select>
			<br><br>
			<h4>Message:</h4>
			<input type="text" name="message" value="" size="20">
			<br>
			<input type="submit" name="submit" value="submit" size="30">
		</div>
	</div>
</form>
</body>
</html>


@endsection