<?php

namespace App\Models;

use App\Models\Tbl_mobil;
use App\Models\Tbl_driver;
use App\Models\Tbl_pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tbl_akun extends Authenticatable
{
    use HasFactory;

    protected $guards = [];

    public function tbl_pesanan() {
        return $this->hasMany(Tbl_pesanan::class);
    }

    public function tbl_mobil() {
        return $this->hasMany(Tbl_mobil::class);
    }

    public function tbl_driver() {
        return $this->hasMany(Tbl_driver::class);
    }
}
