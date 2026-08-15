<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function register(RegisterRequest $request){

        User::create([
                'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return redirect()->route('login')->with('success','Hesabın başarıyla oluşturuldu! Şimdi giriş yapabilirsin.');
    }
}
