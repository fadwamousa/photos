@extends('layouts.master')
@section('content')
<div class="container">
	<form method="POST" action="{{url('/upload')}}" enctype="multipart/form-data">
		
		@csrf
		  <div class="form-group">
		    <label for="exampleFormControlFile1">uplaod File Or Photo</label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
		    <br>
		    <button type="submit" class="btn btn-primary">Upload</button>
		  </div>
    </form>

    @include('layouts.message')
	
</div>

@endsection