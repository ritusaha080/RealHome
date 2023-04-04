<?php

namespace App\Http\Controllers;
use App\Models\blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function show()
    {
        $blogs=blog::paginate(2);
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
        $contact_us= DB::table('contact_us')->latest()->get();
        //dd($blogs);
        return view('frontend.blog.blogdetails',compact('blogs','contact_us'));
    }
}
