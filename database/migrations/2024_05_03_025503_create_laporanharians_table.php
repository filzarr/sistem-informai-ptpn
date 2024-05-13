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
        Schema::create('laporanharians', function (Blueprint $table) {
            $table->uuid('id')->primary()->nullable(false); 
            $table->float('realisasi_tbs',$precision= 53)->nullable();
            $table->float('rkap_tbs',$precision= 53)->nullable();
            $table->float('sisa_tbs',$precision= 53)->nullable();
            $table->float('realisasi_minyaksawit',$precision= 53)->nullable();
            $table->float('rkap_minyaksawit',$precision= 53)->nullable();
            $table->float('realisasi_intisawit',$precision= 53)->nullable();
            $table->float('rkap_intisawit',$precision= 53)->nullable();
            $table->float('realisasi_rendemen',$precision= 53)->nullable();
            $table->float('rkap_rendemen',$precision= 53)->nullable();
            $table->float('pengiriman_minyaksawit',$precision= 53)->nullable();
            $table->float('pengiriman_intisawit',$precision= 53)->nullable();
            $table->float('pengiriman_cangkang',$precision= 53)->nullable();
            $table->enum('ptpn', ['gunung-banyu','tanah-itam-ulu','laras','bukit-lima','dolok-ilir','mayang','marihat','tbs p-III','gabungan']);
            $table->timestamp('tanggal', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporanharians');
    }
};
