<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class formController extends Controller
{
    public function formlogin() {
    	return view('formLogin');
    }

    public function formsignup() {
    	return view('formSignup');
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = DB::table('admin')->where('username_admin', $username)->where('password_admin', $password)->first();

        if($data){
            Session::put('id',$data->id_admin);
            Session::put('login',TRUE);

            return redirect('/buku');
        }
        else{
            return redirect('formlogin')->with('alert', 'Password atau Email anda salah');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('formlogin')->with('alert','Kamu sudah logout');
    }

}
