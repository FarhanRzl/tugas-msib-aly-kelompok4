<?php

namespace App\Http\Controllers;

use App\Models\Tbl_akun;
use App\Models\Tbl_maintenance;
use App\Models\Tbl_mobil;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index() 
    {
        
        return view('maintenance.index',[
            'title'=>'Tambah Mobil',
            'admins'=>Tbl_akun::where('role','admin')->get(),
            'mobil'=>Tbl_mobil::all(),
            'maintenance' =>Tbl_maintenance::all()
        ]);

    }
    public function store(Request $request)
    {
        $addMaintenance = new Tbl_maintenance();
        $addMaintenance->tbl_mobil_id = $request->mobil_id;
        $addMaintenance->tbl_akun_id = $request->admin_id;
        $addMaintenance->jenis_kerusakan = $request->jenis_kerusakan;
        $addMaintenance->biaya_perbaikan = $request->perbaikan_price;
        $addMaintenance->save();

        $mobil = Tbl_mobil::findOrFail($request->mobil_id);
        $mobil->is_maintenance = true;
        $mobil->save();

        return redirect()->back()->with("update", "Silahkan Login Terlebih dahulu!");
    }
    public function destroy($id)
    {
        $maintenance = Tbl_maintenance::where(["id"=>$id])->first();
        $mobil= Tbl_mobil::findOrFail($maintenance->tbl_mobil_id);
        $mobil->is_maintenance = false;
        $maintenance->delete();
        $mobil->save();
        return redirect()->back()->with("update", "Silahkan Login Terlebih dahulu!");
    }
}
