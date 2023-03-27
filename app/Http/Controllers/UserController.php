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
        //return $userData;
        return view('users.user-master');
    }

}
