<?php

namespace App\Http\Controllers;

use App\Models\Tbl_pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function view() {
        return view('clientview',[
            'laporan'=>Tbl_pesanan::all()
        ]);
    }
}
