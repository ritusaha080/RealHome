<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\testimonials;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\TestimonalRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Storage;



class TestimonialController extends Controller
{
    public function testimonialView(){
        return view('admin.testimonials.add');
    }
    public function testimonialAdd( RequestsPostRequest $request){
       //dd($request->all());
        $name = null;
        if($request->hasFile('images')){
            $name=time().'.'.$request->file('images')->getClientOriginalExtension();
            $images=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('images')));
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

    public function delete_Testt(Request $request){
        $id = $request->get('id');
        $testimonial = testimonials::find($id);
        $images=Storage::delete('/public/post-image/'.$testimonial->images);
        $testimonial->delete();
        return back()->with("success","Deleted Successfully");

    }

    public function edit_Test($id){
        //$id = $request->get('id');
        $testimonial = testimonials::find($id);
        return view('admin.testimonials.edit',['data'=>$testimonial]);
    }

    public function edit_submit(Request $request){
        //dd($request->all());
        $name = null;
        if($request->hasFile('images')){
            $name=time().'.'.$request->file('images')->getClientOriginalExtension();
            $id = $request->get('id');
            $testimonial = testimonials::find($id);
            $images=Storage::delete('/public/post-image/'.$testimonial->images);
            $images=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('images')));
        }
        $testimonial = testimonials::find($request->get('id'));
        $testimonial->title = $request->get('title');
        $testimonial->images=$name;
        $testimonial->description=$request->get('description');
        $testimonial->save();

        //return redirect(route('create'));

        return redirect(route('testimonial.list'))->with("edited","Edited Successfully");
    }
}
