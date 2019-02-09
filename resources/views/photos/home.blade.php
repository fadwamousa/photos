@extends('layouts.master')
@section('home')

 <div class="row">
 	@foreach($photos as $photo)
            <div class="col-md-4">
             <div class="card mb-4 box-shadow">
             	<br>
             	<img class="card-img-top" 
             	     
             	     src="{{asset('storage/images/'.$photo->name_photo)}}" 
             	     alt="Card image cap"
             	     width="300"
             	     height="150" 
             	     >

                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>


                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/show/'.$photo->id)}}">View</a></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">{{$photo->created_at}}</small>
                  </div>
                </div>
              </div>
            </div>
    @endforeach        
 </div>


@endsection