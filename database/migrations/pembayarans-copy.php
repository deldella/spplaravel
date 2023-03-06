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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('id_petugas');
            $table->foreignId('id_petugas')->constrained('id_petugas')->on('users')->onDelete('cascade')->onUpdate('cascade');

            // $table->char('nisn', 10);
            $table->foreignId('nisn')->constrained('nisn')->on('siswa')->onDelete('cascade')->onUpdate('cascade');

            $table->date('tanggal_bayar');
            $table->string('bulan_bayar', 25);
            $table->string('tahun_bayar', 4);

            // $table->unsignedBigInteger('id_spp');
            $table->foreignId('id_spp')->constrained('id_spp')->on('spp')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('jumlah_bayar');
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
        Schema::dropIfExists('pembayaran');
    }
};
