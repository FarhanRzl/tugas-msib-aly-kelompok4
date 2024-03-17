<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_maintenance extends Model
{
    use HasFactory;
    public function tbl_akun() {
        return $this->belongsTo(Tbl_akun::class);
    }
    public function tbl_mobil() {
        return $this->belongsTo(Tbl_mobil::class);
    }
}
