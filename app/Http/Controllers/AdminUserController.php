<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    

    public function index() {
        return view('admin.login');
    }

    public function store(Request $request) {
        
        //Validate the user
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
        //Log the user in
        $credentials = $request->only('email','password');
        
        if(! Auth::guard('admin')->attempt($credentials)) {
            return back()->withErrors([
                'message' => 'Wrong credentials please try again'
            ]);
        }
        //Session message
            session()->flash('msg','You have been logged in');

        //Redirect
        return redirect('/admin');
    }

    public function logout() 
    {
        auth()->guard('admin')->logout();

        session()->flash('msg','You have been logged out');

        return redirect('/admin/login');
    }

}
