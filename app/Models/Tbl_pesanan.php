<?php

namespace App\Models;

use App\Models\Tbl_akun;
use App\Models\Tbl_mobil;
use App\Models\Tbl_driver;
use App\Models\Tbl_pemesan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tbl_pesanan extends Model
{
    use HasFactory;

    protected $guards = [];

    public function tbl_akun() {
        return $this->belongsTo(Tbl_akun::class);
    }

    public function tbl_mobil() {
        return $this->belongsTo(Tbl_mobil::class);
    }

    public function tbl_driver() {
        return $this->belongsTo(Tbl_driver::class);
    }
}
