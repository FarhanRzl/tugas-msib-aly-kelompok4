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
        Schema::create('tbl_maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbl_mobil_id')->constrained('tbl_mobils');
            $table->foreignId('tbl_akun_id')->constrained('tbl_akuns');
            $table->string('jenis_kerusakan');
            $table->integer('biaya_perbaikan');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_maintenances');
    }
};
