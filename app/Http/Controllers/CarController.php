<?php

namespace App\Http\Controllers;

use App\Models\Tbl_akun;
use App\Models\Tbl_mobil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index() {
        return view('addcar',[
            'title'=>'Tambah Mobil',
            'admins'=>Tbl_akun::where('role','admin')->get(),
            'mobil'=>Tbl_mobil::all()
        ]);
    }
    
    public function tambahmobil(Request $request) {
        

        $path = Storage::putFile('img/cars', $request->file('uploadedimage'));

        $addcar = new Tbl_mobil;
        $addcar->nama=$request->car_name;
        $addcar->no_polisi=$request->car_nameplate;
        $addcar->tarifhari=$request->car_priceday;
        $addcar->foto_mobil=$path;
        $addcar->tbl_akun_id=$request->admin_id;
        $addcar->save();

        return redirect('/addcar1')->with("update", "Silahkan Login Terlebih dahulu!");
    }


    public function editmobil($id) {
        return view('caredit',[
            'mobil'=>Tbl_mobil::find($id)
        ]);
    }

    public function edit(Request $request) {
        $validate = $request->validate(
            [
                'uploadedimage' => 'image|file'
            ]
            );
        
        if(!is_null($request->file('uploadedimage'))) {
            $path = Storage::putFile('img/cars', $request->file('uploadedimage'));
        }
        $addcar = Tbl_mobil::find($request->id);
        $addcar->nama=$request->car_name;
        $addcar->no_polisi=$request->car_nameplate;
        $addcar->tarifhari=$request->car_priceday;
        if(!is_null($request->file('uploadedimage'))) {
            $addcar->foto_mobil=$path;
        }
        $addcar->save();

        return redirect('/addcar1');
    }

    public function delete($id)
    {
        Tbl_mobil::find($id)->delete();
        return redirect('/addcar');
    }
}
