<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use App\Http\Requests\PostRequest as RequestsPostRequest;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostSettingsController extends Controller
{
//    public function settings(){
//
//        return view('admin.settings.settings');
//    }

    public function settingsView()
    {
        $data['settings'] = Settings::pluck('value', 'name' )->toArray();

        return view('admin.settings.settings_show', $data);
    }

    public function settingsSave(Request $request)
    {
        // dd($request->all());
        $data = $request->except(['_method', '_token']);

        foreach ($data as $key => $value) {

            if ($key === 'logo') {

                if ($request->hasFile('logo')) {
                    $logo= Settings::where('name','=','logo')->pluck('value');
                    //dd($logo);
                    Storage::delete('/public/logo/' . $logo[0]);
                    $name = time() . '.' . $request->file('logo')->getClientOriginalExtension();
                    $image = Storage::put('/public/logo/' . $name, file_get_contents($request->file('logo')));
                    $createSetting = Settings::updateOrCreate([
                        'name' => $key,
                    ], [
                        'value' => $name,
                    ]);
                }
            } else {
                $createSetting = Settings::updateOrCreate([
                    'name' => $key,
                ], [
                    'value' => $value,
                ]);
            }

        }

            return to_route('settings.settingsView')->with('posted', 'Data Entry Successful');
        }



}
