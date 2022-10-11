<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function store()
    {
        $attribute = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'mobile_num' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);
        $attribute['password'] = bcrypt($attribute['password']);
        $user = User::create($attribute);
        //user created
        dd("user created");
    }

    public function logout()
    {
        auth()->logout();
        return redirect("");
    }

    public function log_show()
    {
        return view('user.login');
    }

    public function log_store()
    {
        $attr = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        auth()->attempt($attr);
        return redirect("");
    }


    //for cart login

    public function cart_show()
    {
        return view('user.cart_login');
    }

    public function cart_login()
    {
        $attr = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        auth()->attempt($attr);
        return redirect()->intended('checkout');
    }
}