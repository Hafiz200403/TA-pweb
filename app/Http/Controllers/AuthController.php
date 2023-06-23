<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginform()
    {
        return view('login') ;
    }

    public function login(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/admin')->with('success','Data Ruangan Berhasil Ditambah!');
        } else{
            return 'gagal';
        }
    }

    public function daftarform()
    {
        return view('daftar') ;
    }



    public function daftar()
    {

    }
}
