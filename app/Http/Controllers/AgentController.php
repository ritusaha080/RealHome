<?php

namespace App\Http\Controllers;
use App\Models\agent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    public function agentView(){
        return view('admin.agent.agentadd');
    }
    public function agentAdd(Request $request){
       //dd($request->all());
       $name = null;
       if($request->hasFile('image')){
           $name=time().'.'.$request->file('image')->getClientOriginalExtension();
           $image=Storage::put('/public/post-image/'.$name,file_get_contents($request->file('image')));
       }
        $agents = agent::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'description'=>$request->get('description'),
            'phone'=>$request->get('phone'),
            'image'=>$name
            
        ]);
        
        if($agents){
            return to_route('agent.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }

    public function agentList(){
        $agents= DB::table('agents')->latest()->get();
        //dd($categories);
        return view('admin.agent.agentlist',compact('agents'));
    }

}
