<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('harga');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->foreignId('tbl_akun_id')->constrained('tbl_akuns');
            $table->foreignId('tbl_mobil_id')->constrained('tbl_mobils');
            $table->foreignId('tbl_driver_id')->constrained('tbl_drivers');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pesanans');
    }
};
