<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\agent;
use App\Models\testimonials;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homePage(){
        $properties=property::limit(3)->get();
        //dd($properties);
        $agents=agent::all();
         //dd($agents);
         $testimonials=testimonials::all();
        return view('frontend.index.index',compact('properties','agents','testimonials'));  
        
    }

    //about

    public function about(){
        return view('frontend.index.about');  
    }
    //property
    public function property(){
        return view('frontend.index.property');  
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
    //agent show
    

}
