<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showloginform()
    {
        $title = "Admin Login";
        return view('admin.login',compact('title'));
    }

    public function login(Request $request)
    {
        //dd("hello");
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $message = [
             'email.required' => 'Email is required',
             'password.required' => 'Password is required',
        ];
        $v = Validator::make($request->all(), $rules, $message);
        if ($v->fails()) {
            return redirect()->back()
                ->withErrors($v)
                ->withInput();
        }
        else {

            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1])) {
                // $this->userService->updateLastLogin(Auth::guard('admin')->user()->id);

                return redirect()->route('admin.dashboard')->with('success', 'Successfully logged in');
            }
            else{
               return redirect()->back()->with('alert-danger', 'Wrong credentials')->withInput();
            }
        }
    }

    public function logout(Request $request) 
    {
        auth('admin')->logout();
        // $user_id = Auth::logout()->id;
        // dd($user_id);
        $request->session()->flush();
        Session::flush();
        return redirect('/admin/login');
    }
}
