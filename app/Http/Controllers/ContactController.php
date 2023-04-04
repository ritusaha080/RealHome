<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest as RequestsPostRequest;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactView(){

         return view('frontend.index.contact');
     }

     public function contactPost(RequestsPostRequest $request){

        // dd($request->all());

         $contacts = ContactUs::create([

             'name'=>$request->get('name'),
             'email'=>$request->get('email'),
             'comments'=>$request->get('comments'),

         ]);
         // dd($payments);


         if($contacts){
            return Redirect::back()->with('posted','payment done Successfull');

         }else{
             return Redirect::back();
         }

     }
     public function contactList(){
        $contact_us= DB::table('contact_us')->latest()->get();
        //dd($categories);
        return view('admin.contact.list',compact('contact_us'));
    }
}
