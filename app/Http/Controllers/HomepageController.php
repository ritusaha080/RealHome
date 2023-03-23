<?php

namespace App\Http\Controllers;
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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function homePage(){
        $properties=property::doesntHave('payment')->limit(3)->get();
        //dd($properties);
        $agents=agent::all();
         //dd($agents);
         $testimonials=testimonials::all();
         $partners=partners::all();
        return view('frontend.index.index',compact('properties','agents','testimonials','partners'));

    }

    //about

    public function about(){

        $settings= getSettingsData('AboutUs');
        $agents=agent::all();

        return view('frontend.index.about', compact('settings','agents'));
    }
    //property
    public function property(){
        $categories=category::get();
        // $properties=property::groupBy('category_id')->get();
        // dd($properties);
        return view('frontend.index.property',compact('categories'));
    }

    //purchased property
    public function purchasedProperty(Request $request ){

        $purchasedproperty=property::doesntHave('payment')->get();
        dd($purchasedproperty);

        return view('frontend.index.property',compact('purchasedproperty'));
    }
    //contact
    public function contact(){
        return view('frontend.index.contact');
    }

           //property details show
    public function propertyShow($id){
        $properties = property::find($id);
        $relatedProperties=property::inRandomOrder()->limit(3)->get();
        //dd($relatedProperties);
        return view('frontend.index.show-property-details',compact('properties','relatedProperties'));
    }

    public function blogShow($id){
        $blogs = blog::find($id);

        return view('frontend.blog.blogdetails',compact('blogs'));
    }



}
