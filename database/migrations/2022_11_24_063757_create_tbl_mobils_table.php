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
        Schema::create('tbl_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_polisi');
            $table->decimal('tarifhari', $precision = 10, $scale = 0);
            $table->string('foto_mobil');
            $table->foreignId('tbl_akun_id')->constrained('tbl_akuns');
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
        Schema::dropIfExists('tbl_mobils');
    }
};
