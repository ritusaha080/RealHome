<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use App\Http\Requests\PostRequest as RequestsPostRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostSettingsController extends Controller
{
    public function settings(){
        
        return view('admin.settings.settings');
    }
    public function postSettings(Request $request){
        //dd($request->all());
        
        $settings = Settings::create([
            'name'=>$request->get('name'),
            'value'=>$request->get('value'),
        ]);
        


        if($settings){
            return to_route('settings.list')->with('posted','Data Entry Successfull');

        }else{
            return Redirect::back();
        }

    }
    public function settingsList(){
        $settings= DB::table('settings')->latest()->get();
        //dd($categories);
        return view('admin.settings.settingslist',compact('settings'));
    }


    public function settingsView()
    {
        $data['settings'] = Settings::pluck('value', 'name' )->toArray();

        return view('admin.settings.settings_show', $data);
    }

    public function settingsSave(Request $request)
    {
        $data = $request->except(['_method', '_token']);
        foreach($data as $key => $value) {
            Settings::updateOrCreate(['name' => $key], ['value' => $value]);
        }

        return to_route('settings.settingsView')->with('posted','Data Entry Successfull');
    }
}
