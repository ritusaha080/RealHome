<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Property;
use App\Http\Requests\PropertyRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function property(){

        $data= Category::all();
        return view('admin.property.property',['data'=>$data]);
    }
    public function PostProperty(RequestsPostRequest $request){
        //dd($request->all());
        $name = null;
        if($request->hasFile('image')){
            $name=$request->file('image')->getClientOriginalName().'.'.$request->file('image')->getClientOriginalExtension();
            $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
        }
        $properties = Property::create([
            'client'=>$request->get('client'),
            'category_id'=>$request->get('category_id'),
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=>$name,
            'price'=>$request->get('price'),
        ]);
        $properties=Property::with('category')->get();
        //$blogs->user()->associate(Auth::user());
        //$properties->save();


        if($properties){
            return to_route('property.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }
    public function PropertyList(){
        $properties=property::with(['category'])->latest()->paginate(2);
        //dd($proterties);
        return view('admin.property.propertylist',compact('properties'));
    }

            //Property edit,delete


    public function delete_post(Request $request){
        $id = $request->get('id');
        $property = Property::find($id);
        $image=Storage::delete('/public/post-image/'.$property->image);
        $property->delete();
        return back()->with("success","Deleted Successfully");

    }

    public function edit_post($id){
        //$id = $request->get('id');
        $property = Property::find($id);
        return view('admin.property.editproperty',['data'=>$property]);
    }

    public function edit_submit(Request $request){
        //dd($request->all());
        $name = null;
        if($request->hasFile('image')){
            $name=time().'.'.$request->file('image')->getClientOriginalExtension();
            $id = $request->get('id');
            $property = Property::find($id);
            $image=Storage::delete('/public/post-image/'.$property->image);
            $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
        }
        $property = Property::find($request->get('id'));
        $property->client=$request->get('client');
        $property->title = $request->get('title');
        $property->image=$name;
        $property->description=$request->get('description');
        $property->price=$request->get('price');
        $property->save();

        //return redirect(route('create'));

        return redirect(route('property.list'))->with("edited","Edited Successfully");
    }

}
