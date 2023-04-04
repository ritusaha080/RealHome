<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use App\Models\partners;
use App\Models\services;
use App\Http\Requests\ServiceRequest as RequestsPostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function service(){
        return view('admin.service.add');
    }
    public function postService(RequestsPostRequest $request){
       //dd($request->all());
        $name = null;
        if($request->hasFile('image')){
            $name=time().'.'.$request->file('image')->getClientOriginalExtension();
            $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
        }
        $services = OurService::create([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'image'=>$name
        ]);



        if($services){
            return to_route('service.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }

    public function ServiceList(){
        $services= DB::table('our_services')->latest()->get();
        //dd($categories);
        return view('admin.service.list',compact('services'));
    }

}
