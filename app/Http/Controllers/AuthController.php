<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerAction(Request $request)
    {
        $validation = $request->validate([
            'username' => 'required|unique:users|min:3:max:25',
            'password' => 'required|min:3',
            'fullname' => 'required|unique:users|min:3',
        ]);
        $validation['role'] = 'user';
        $validation['is_active'] = 0;
        $validation['password'] = Hash::make($validation['password']);
        User::create($validation);
        return redirect('/login')->with('message','Berhasil Registrasi!');


    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginAction(Request $request)
    {
        $users = User::where('username', $request->username)->where('is_active', 0)->exists();
        if($users){
            return  redirect()->back()->with('messageLogin','Akun Anda Belum Di Aktifkan!');
        }
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with('messageLogin','Login Gagal! Silahkan Coba Lagi');   

    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('message','Berhasil Log Out!');
    }
    
    
}
