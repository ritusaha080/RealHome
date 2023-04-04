<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\CategoryRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.category');
    }
    public function PostCategory(RequestsPostRequest $request){
       //dd($request->all());

        $categories = Category::create([
            'category_name'=>$request->get('category_name')
        ]);
        $categories=Category::with('properties')->get();
        //$blogs->user()->associate(Auth::user());
        // $categories->save();


        if($categories){
            return to_route('category.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }

    public function CategoryList(){
        $categories= DB::table('categories')->latest()->get();
        //dd($categories);
        return view('admin.category.categorylist',compact('categories'));
    }

}
