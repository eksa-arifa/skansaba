<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        try{
            \Auth::logout();

            return redirect()->route('login')->with("success","logout success!");
        }catch(\Exception $e){
            return redirect()->back()->with("error","logout failed!");
        }
    }
}
