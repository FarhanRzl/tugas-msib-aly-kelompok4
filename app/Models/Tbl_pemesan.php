<?php

namespace App\Models;

use App\Models\Tbl_pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tbl_pemesan extends Model
{
    use HasFactory;

    protected $guards = [];

    public function tbl_pesanan() {
        return $this->hasMany(Tbl_pesanan::class);
    }
}
