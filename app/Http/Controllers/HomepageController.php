<?php

namespace App\Http\Controllers;
use App\Models\OurService;
use App\Models\Property;
use App\Models\User;
use App\Models\agent;
use App\Models\Settings;
use App\Models\blog;
use App\Models\category;
use App\Models\testimonials;
use App\Models\partners;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function homePage(){
        $properties=property::doesntHave('payment')->limit(3)->get();

        //dd($properties);
        $services=OurService::all();
        $agents=agent::all();
         //dd($agents);
        $settings= getSettingsData('We_are_offering');
         $testimonials=testimonials::all();
         $partners=partners::all();
        return view('frontend.index.index',compact('properties','agents','testimonials','partners','settings','services'));

    }

    //about

    public function about(){

        $settings= getSettingsData('AboutUs');
        $services=OurService::all();
        $partners=partners::all();
        $agents=agent::all();

        return view('frontend.index.about', compact('settings','agents','services','partners'));
    }
    //property
    public function property(){
        $categories=category::get();
//        $properties=Property::paginate(2);
        // dd($properties);
        return view('frontend.index.property',compact('categories'));
    }

    //purchased property
    public function purchasedProperty(Request $request ){

        $purchasedproperty=property::doesntHave('payment')->get();
       // dd($purchasedproperty);

        return view('frontend.index.property',compact('purchasedproperty'));
    }
    //contact
    public function contact(){
        return view('frontend.index.contact');
    }

           //property details show
    public function propertyShow($id){
        $properties = property::find($id);
//        $categories=category::get();
//
        $relatedProperties=property::doesntHave('payment')->where('id','!=', $id)->where('category_id','=',$properties->category_id)->limit(3)->get();

        //dd($relatedProperties);
        return view('frontend.index.show-property-details',compact('properties','relatedProperties'));
    }

    public function blogShow($id){
        $blogs = blog::find($id);

        return view('frontend.blog.blogdetails',compact('blogs'));
    }


    //purchased property view
    public function purchasedPropertyview(Request $request){
//        $properties = property::with(['category'])->latest()->get();
        $properties = payment::where('user_id', Auth::id())->with('property.category')->get();
//       dd($property);

        return view('users.purchased-property-list',compact('properties'));
    }



}
