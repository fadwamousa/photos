@extends('layouts.master')
@section('home')

 <div class="row">
 	
            <div class="col-md-4">
             <div class="card mb-4 box-shadow">
             	<br>
             	<img class="card-img-top" 
             	     
             	     src="{{asset('storage/images/'.$photo_one->name_photo)}}" 
             	     alt="Card image cap"
             	     width="700"
             	     height="500" 
             	     >

                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">{{$photo_one->created_at->diffForHumans()}}</small>
                  </div>
                </div>
              </div>
            </div>
          
 </div>


@endsection