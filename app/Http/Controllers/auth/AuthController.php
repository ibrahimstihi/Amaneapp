<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->type=='0'){
                return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
            }elseif(Auth::user()->type=='2'){
                $users = DB::select('select * from users where type=1 and is_valid=0');
                return view('admin.dashboard.home',['users'=>$users])            
                ->withSuccess('You have Successfully loggedin');
            }elseif(Auth::user()->type=='1'){
                return view('psy.dashboard.home')            
                ->withSuccess('You have Successfully loggedin');
            }
            
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function dashboard()
    {
        if(Auth::check() && Auth::user()->type=='1'){
            return view('psy.dashboard.home');
        }elseif(Auth::check() && Auth::user()->type=='2'){   
            $users = DB::select('select * from users where type=1 and is_valid=0');
            return view('admin.dashboard.home',['users'=>$users]) ;
        }
        return redirect("login")
        ->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
