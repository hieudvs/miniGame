<?php

namespace App\Http\Controllers\User\Login;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
    	return view('User/Login/index');
    }

    function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->pwd])){
            return redirect('/');
        }
        else{
            return redirect('Login')->with('login_fail','Email hoặc mật khẩu không đúng');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}