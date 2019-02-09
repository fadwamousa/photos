<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
class PhotoController extends Controller
{



	public function index(){
		$photos = Photo::latest()->paginate(5);
		return view('photos.home',compact('photos'));
	}

	public function show($id)
	{
		$photo_one = Photo::find($id);
		return view('photos.show',compact('photo_one'));
	}


    public function create(){
    	return view('photos.create');
    }



    public function store(Request $request){
    	//validate
    	$this->validate(request(),['file'=>'required|image|max:19999']);

    	//store
    	if($request->hasFile('file')){
    		//GEt the filename with extension
    		$filenameWithExtension = $request->file('file')->getClientOriginalName();
    		//Get the filename
    		$filename = pathinfo($filenameWithExtension,PATHINFO_FILENAME);

    		//Get the extension only
    		$Ext = $request->file('file')->getClientOriginalExtension();


    		//File Name To Store

    		$fileNameToStore = $filename.'_'.time().'.'.$Ext;

    		//upload file 

    		$path = $request->file('file')->storeAs('public/images',$fileNameToStore);

    		//store the data

    		$photo = new Photo();
    		$photo->name_photo = $fileNameToStore;
    		$photo->save();

    		//redirect
    		session()->put('message','Images Is created');
    		return redirect('/home');




    	}
    }
}
