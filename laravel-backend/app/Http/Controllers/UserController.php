<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function store()
    {
        $attribute = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required',
            'mobile_num' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);
        $attribute['password'] = bcrypt($attribute['password']);
        User::create($attribute);
    }

    public function login()
    {
        // $attr = request()->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);
        // auth()->attempt($attr);
        // return redirect("");
        $user=User::where("email",request('email'))->first();

        if(!$user){
            return "user doesnot exist";
        }

        if(!$user||!Hash::check(request('password'),$user->password)){
            return "password didnot match";
        }
        return ["user"=>$user];
    }

}