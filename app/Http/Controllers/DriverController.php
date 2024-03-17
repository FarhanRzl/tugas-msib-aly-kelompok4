<?php

namespace App\Http\Controllers;

use App\Models\Tbl_akun;
use App\Models\Tbl_driver;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    public function index() {
        return view('adddriver',[
            'title'=>'Tambah Driver',
            'admins'=>Tbl_akun::where('role','admin')->get(),
            'driver'=>Tbl_driver::all()
        ]);
    }

    public function tambahdriver(Request $request) {
        // $validate = $request->validate([
        //     'driver_name' => 'required',
        //     'driver_phone' => 'required',
        //     'driver_gender' => 'required',
        //     'admin_id' => 'required',
        //     'status'=> 'required',
        // ]);

        $adddriver = new Tbl_driver;
        $adddriver->nama=$request->driver_name;
        $adddriver->no_telp=$request->driver_phone;
        $adddriver->jenis_kelamin=$request->driver_gender;
        $adddriver->tbl_akun_id=$request->admin_id;

        $adddriver->save();

        return redirect('/adddriver1');
    }


    public function getDriver(Request $request){
        $driver = Tbl_driver::find($request->id);

        
        return response()->json(array("msg"=>"Berhasil mendapatkan data driver","driver" => $driver));
    }

    public function editdriver($id) {
        return view('driveredit',[
            'driver'=>Tbl_driver::find($id)
        ]);
    }

    public function edit(Request $request) {
        
        $adddriver = Tbl_driver::find($request->id);
        $adddriver->nama=$request->driver_name;
        $adddriver->no_telp=$request->driver_phone;
        $adddriver->jenis_kelamin=$request->driver_gender;
        $adddriver->save();

        return redirect('/adddriver1');
    }

    public function delete($id)
    {
        Tbl_driver::find($id)->delete();
        return redirect('/adddriver');
    }
}
