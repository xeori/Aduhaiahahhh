<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->integer('id');
            $table->date('tanggal_pinjam');
            $table->integer('lama_pinjam');
            $table->text('keterangan');
            $table->enum('status' , ['Sudah kembali', 'Belum kembali']);
            $table->integer('anggota_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamen');
    }
};
