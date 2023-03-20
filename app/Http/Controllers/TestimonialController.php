<?php

namespace App\Http\Controllers;
use App\Models\testimonials;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class TestimonialController extends Controller
{
    public function testimonialView(){
        return view('admin.testimonials.add');
    }
    public function testimonialAdd(Request $request){
       //dd($request->all());
       $name = null;
       if($request->hasFile('image')){
           $name=time().'.'.$request->file('image')->getClientOriginalExtension();
           $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
       }
        $testimonials = testimonials::create([
            
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'images'=>$name
            
        ]);
        
        if($testimonials){
            return to_route('testimonial.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }

    public function testimonialList(){
        $testimonials= DB::table('testimonials')->latest()->get();
        //dd($categories);
        return view('admin.testimonials.list',compact('testimonials'));
    }
}
