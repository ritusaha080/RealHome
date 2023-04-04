<?php

namespace App\Http\Controllers;
use App\Models\faq;
use App\Http\Requests\FaqRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function faqView(){
        return view('admin.faq.add');
    }
    public function faqAdd(RequestsPostRequest $request){
       //dd($request->all());

        $faqs = faq::create([
            'questions'=>$request->get('questions'),
            'answers'=>$request->get('answers')
        ]);

        if($faqs){
            return to_route('faq.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }

    public function list(){
        $faqs= DB::table('faqs')->latest()->get();
        //dd($categories);
        return view('admin.faq.list',compact('faqs'));
    }

}


