<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
       
        if(Auth::id()){

            $usertype = Auth()->user()->usertype;            
            if($usertype=="user"){
                return view("userpanel.user.index");
            }
            else if($usertype=="useradmin"){
                return view("userpanel.super.index");
            }
            else{
                return view("userpanel.admin.index");
            }
            
        }
        else{
            return view("welcome");
        }
    }
}