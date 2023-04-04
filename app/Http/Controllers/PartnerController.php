<?php

namespace App\Http\Controllers;
use App\Models\partners;
use App\Http\Requests\PartnerRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function partner(){
        return view('admin.partners.add');
    }
    public function PostPartner(RequestsPostRequest $request){
       //dd($request->all());
       $name = null;
       if($request->hasFile('logo')){
           $name=time().'.'.$request->file('logo')->getClientOriginalExtension();
           $logo=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('logo')));
       }
        $partners = partners::create([
            'name'=>$request->get('name'),
           'links'=>$request->get('links'),
            'logo'=>$name

        ]);



        if($partners){
            return to_route('partners.list')->with('posted','Data Entry Successful');

        }else{
            return Redirect::back();
        }

    }

    public function partnerList(){
        $partners= DB::table('partners')->latest()->get();
        //dd($categories);
        return view('admin.partners.list',compact('partners'));
    }

}
