<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminAuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function check(Request $request){
        //Validate requests
        $request->validate([
             'username'=>'required',
             'password'=>'required|min:8|max:36'
        ]);
    
        $userInfo = Admin::where('username','=', $request->username)->first();
    
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if('$request->password, $userInfo->password'){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/categories/');
    
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('admin/login');
        }
    }

  
}