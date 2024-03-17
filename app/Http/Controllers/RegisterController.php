<?php

namespace App\Http\Controllers;

use App\Models\Tbl_akun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registrasi(Request $request) {
        $validate = $request->validate([
            'customer_name' => 'required',
            'customer_username' => 'required',
            'customer_email' => 'required|email:dns',
            'customer_phone' => 'required|numeric',
            'customer_address' => 'required',
            'customer_password' => 'required'
        ]);
    
        $customer = new Tbl_akun;
        $customer->nama=$request->customer_name;
        $customer->username=$request->customer_username;
        $customer->email=$request->customer_email;
        $customer->phone=$request->customer_phone;
        $customer->address=$request->customer_address;
        $customer->password=Hash::make($request->customer_password);
        $customer->role='customer';
        $customer->save();

        return redirect('/customerregister');
    }

    public function registrasiadmin(Request $request) {
        // dd($request);
        $validate = $request->validate([
            'client_name' => 'required',
            'client_username' => 'required',
            'client_email' => 'required|email:dns',
            'client_phone' => 'required|numeric',
            'client_address' => 'required',
            'client_password' => 'required'
        ]);
    
        $client = new Tbl_akun;
        $client->nama=$request->client_name;
        $client->username=$request->client_username;
        $client->email=$request->client_email;
        $client->phone=$request->client_phone;
        $client->address=$request->client_address;
        $client->password=Hash::make($request->client_password);
        $client->role='admin';
        $client->save();

        return redirect('/clientregister');
    }
}
