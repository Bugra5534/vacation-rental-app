<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        public function showLogin(){

            return view('login');
        }

        public function login(LoginRequest $request){

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Eşleşirse (Giriş Başarılı) adamın session'ını yenile ve ana sayfaya yolla
                $request->session()->regenerate();
                return redirect('/');
            }

            // İŞTE SORDUĞUN KISIM BURASI
            // Eşleşmezse (Hatalı Şifre/Email), kullanıcıyı geri fırlat ve o hatayı bas
            return back()->withErrors([
                'email' => 'Girdiğiniz e-posta veya şifre hatalı.',
            ])->onlyInput('email'); // Hata yaparsa e-postası silinmesin, formda kalsın
        }
}
