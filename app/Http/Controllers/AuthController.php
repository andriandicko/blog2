<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login', ['title' => 'Login', 'isAuthPage' => true]);
    }

    public function signIn(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($data)){
            return redirect("/");
        }else{
            return redirect()->route('login')->with('message', 'Email atau Password salah');
        }
    }

    public function signOut(){
        Auth::logout();
        return redirect()->route('login')->with('message', 'Berhasil Logout');
    }

    public function register(){
        return view('auth.register', ['title' => 'Register', 'isAuthPage' => true]);
    }

    public function signUp(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        $data['password'] = Hash::make($request->password);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(User::create($data)){
            if(Auth::attempt($login)){
                return redirect("/");
            }else{
                return redirect()->route('login')->with('message', 'Email atau Password salah');
            }
        }
    }
}
