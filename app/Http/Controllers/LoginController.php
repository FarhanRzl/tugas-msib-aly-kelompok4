<?php

namespace App\Http\Controllers;

use App\Models\Tbl_akun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('customerlogin');
    }

    public function authentication(Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            session()->put('role',Auth::user()->role);
            return redirect()->intended('/');
        }

        
    }
    public function logout(){
        Auth::logout();       
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }
}
