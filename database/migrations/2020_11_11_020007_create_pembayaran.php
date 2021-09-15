<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->string('nisn');
            $table->string('id_kelas',100);
            $table->string('id_petugas',100);
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar');
            $table->string('sampai_bulan',100);
            $table->string('tahun_dibayar');
            $table->integer('jumlah_dibayar');
            $table->tinyInteger('is_payed');
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
}
