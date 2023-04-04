<?php

namespace App\Http\Controllers;
use App\Models\property;
use App\Models\User;
use App\Models\payment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PaymentRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function paymentShow($id){

       // dd($id);
        $property=property::with('payment')->find($id);
        //dd($property);
        $data= property::all();
        //$payments=payment::with('property')->get();
        $input= User::all();
        //dd($payments);

        return view('frontend.index.payment',compact('property',));
    }

    public function paymentPost(RequestsPostRequest $request){

       // dd(Auth::id());
    //   dd($request->all());

        $payments = payment::create([
            'user_id'=>Auth::id(),
            'property_id'=>$request->get('property_id'),
            'card_number'=>$request->get('card_number'),
            'cardholder_name'=>$request->get('cardholder_name'),
            'cug_number'=>$request->get('cug_number'),
            'expired_date'=>$request->get('expired_date'),

        ]);
        // dd($payments);


        if($payments){
           return to_route('purchased.property.view',['id'=>$payments->id])->with('posted','payment done Successful');

        }else{
            return Redirect::back();
        }

    }
    public function paymentList(){
       // $payments=payment::with(['property'])->latest()->get();
        $payments=payment::with(['users','property'])->latest()->get();
        //dd($blogs);
        return view('frontend.index.paymentlist',compact('payments'));
    }

    public function propertyBuy($id){
        $properties = property::find($id);
       // dd($properties);
        return view('frontend.index.payment',compact('properties'));
    }

}
