<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userDashboard()
    {
        $userData=payment::with('users')
            ->where('payments.user_id','=',Auth::id())->get();
        $properties = payment::where('user_id', Auth::id())->with('property.category')->get();

        //return $userData;
        if ($userData==null){
            return to_route('user.dashboard')->with('success', 'No data found...');
        }
        return view('users.purchased-property-list',compact('userData','properties'));
    }

}
