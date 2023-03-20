<?php

namespace App\Http\Controllers;
use App\Models\Blog;


use Illuminate\Http\Request;
use App\Http\Requests\PostRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index');
    }
    public function index1()
    {
        return view('admin.blog.blog');
    }
    
    public function Post(RequestsPostRequest $request){
        //dd($request->all());
        $name = null;
        if($request->hasFile('image')){
            $name=time().'.'.$request->file('image')->getClientOriginalExtension();
            $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
        }
        $blogs = Blog::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'image'=>$name,
        ]);
        //$blogs->user()->associate(Auth::user());
        $blogs->save();

        //return redirect(route('create'));

        if($blogs){
            return to_route('post.list.all')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }
    public function show(){
        $blogs= DB::table('blogs')->latest()->get();
        //dd($blogs);
        return view('admin.blog.list',compact('blogs'));
    }
    public function PostAdd(){
        return view('admin.blog.blog');
    }


    //Property section

    
    /**
     * Show the form for creating a new resource.
     */
    //category

    
    

    public function delete_post(Request $request){
        $id = $request->get('id');
        $blog = Blog::find($id);
        $image=Storage::delete('/public/post-image/'.$blog->image);
        $blog->delete();
        return back()->with("success","Deleted Successfully");

    }

    public function edit_post($id){
        //$id = $request->get('id');
        $blog = Blog::find($id);
        return view('admin.blog.editblog',['data'=>$blog]);
    }

    public function edit_submit(Request $request){
        //dd($request->all());
        $name = null;
        if($request->hasFile('image')){
            $name=time().'.'.$request->file('image')->getClientOriginalExtension();
            $id = $request->get('id');
            $blog = Blog::find($id);
            $image=Storage::delete('/public/post-image/'.$blog->image);
            $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
        }
        $blog = Blog::find($request->get('id'));
        $blog->title = $request->get('title');
        $blog->image=$name;
        $blog->description=$request->get('description');
        $blog->save();

        //return redirect(route('create'));

        return redirect(route('post.list.all'))->with("edited","Edited Successfully");
    }
}

