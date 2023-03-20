<?php

namespace App\Http\Controllers;
use App\Models\blog;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function show()
    {
        $blogs=blog::all();
        return view('frontend.blog.bloglist',compact('blogs'));
    }
    public function blog($id){
        $blogs = blog::find($id);
        //$posts= DB::table('posts')->get();
        //dd($blogs);
        return view('frontend.blog.bloglist',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function bloglist($id)
    {
        //dd($id);
        $blogs=blog::find($id);
        //dd($blogs);
        return view('frontend.blog.blogdetails',compact('blogs'));
    }
}
