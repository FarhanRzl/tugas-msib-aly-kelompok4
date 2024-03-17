<?php

namespace App\Http\Controllers;

use App\Models\Tbl_mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('index',[
            'mobil'=>Tbl_mobil::orderBy('created_at','asc')->get()
        ]);
    }
}
