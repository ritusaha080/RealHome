<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    public function loginView(){
        return view('admin.login');
    }

    public function signUpView(){
        return view('admin.register');
    }

    public function signUp(RegisterRequest $request){
        $user = User::where('email',$request->get('email')) -> first();
        if($user){
            return to_route('signup')->with('error', 'user already exists');
        }
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password=Hash::make( $request->get('password'));
        $user->role = RoleEnum::BLOGGER;
        $user->save();
        return to_route('login')->with('success','User Register Successfully');
    }
    public function login(LoginRequest $request){
        $Password=$request->get('password');
        $user = User::where('email', '=', $request->get('email'))->firstOrFail();
        if(!Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password') ]
        )){
            return redirect()->route('login')->with('warning', 'check your Password please');
        }
        $request->session()->regenerate();
        if(Auth::user()->role == RoleEnum::ADMIN){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');
    }
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return to_route('login')->with('success', 'Logout Successfully...');
    }
}
