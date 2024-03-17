<?php

namespace App\Http\Controllers;

use App\Models\Tbl_akun;
use App\Models\Tbl_mobil;
use App\Models\Tbl_driver;
use App\Models\Tbl_pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index($id) {
        return view('booking',[
            'mobil'=>Tbl_mobil::find($id),
            'driver'=>Tbl_driver::orderBy('nama', 'asc')->get()
        ]);
    }

    public function booking(Request $request) {
        
        $tgl_kembali = Carbon::createFromDate($request->rent_end_date);
        $tgl_rental = Carbon::createFromDate($request->rent_start_date);
        $days = $tgl_kembali->diffInDays($tgl_rental);
        
        $bookings = Tbl_pesanan::whereBetween('tgl_pinjam', [$request->rent_start_date, $request->rent_end_date])->whereBetween('tgl_kembali', [$request->rent_start_date, $request->rent_end_date])->get();

        if($bookings->count() > 0){
            return redirect()->back()->with('gagal', 'Mobil tidak tersedia pada tgl tersebut');
        }

        $pesanan = new Tbl_pesanan;
        $pesanan->harga=$request->harga * $days;
        $pesanan->tgl_pinjam=$request->rent_start_date;
        $pesanan->tgl_kembali=$request->rent_end_date;
        $pesanan->tbl_akun_id=Auth::user()->id;
        $pesanan->tbl_mobil_id=$request->idmobil;
        $pesanan->tbl_driver_id=$request->driverid;
        $pesanan->save();
        
        return redirect('/bookingconfirm/'.$pesanan->id);
    }

    public function invoice($id){
        return view('bookingconfirm', [
            'order' => Tbl_pesanan::find($id),
        ]);
    }
        
    public function confirm($id){
        return view('returnconfirm', [
            'kembali' => Tbl_pesanan::find($id),
        ]);
    }

    public function garasi() {
        return view('prereturncar', [
            'pesanan'=>Tbl_pesanan::all()
        ]);
    }

    public function return($id)
    {
        tbl_pesanan::find($id)->delete();
        return redirect()->back()->with("update", "Mobil Berhasil di Kembalikan!");
    }

    // public function return($id) {

    //     $pesanan = Tbl_pesanan::find($id);
    //     $pesanan->status = 'Sudah Dikembalikan';
    //     $pesanan->save();
        
    //     $mobil = Tbl_mobil::find($pesanan->tbl_mobil_id);
    //     $mobil->status = 'Tersedia';
    //     $mobil->save();
        
    //     $driver = Tbl_driver::find($pesanan->tbl_driver_id);
    //     $driver->status = 'Tersedia';
    //     $driver->save();

    //     return redirect('/returnconfirm/'.$pesanan->id);
    // }
}
