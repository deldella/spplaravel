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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();

            $table->date('tanggal_bayar');
            $table->string('bulan_bayar', 25);
            $table->string('tahun_bayar', 4);

            $table->integer('jumlah_bayar');
            $table->foreignId('petugas_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('spp_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pembayarans');
    }
};
