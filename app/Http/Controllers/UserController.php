<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if($user || Hash::check($req->password,$user->password)){
            
        }
    }
}
