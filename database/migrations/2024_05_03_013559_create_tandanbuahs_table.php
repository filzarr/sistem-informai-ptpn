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
        Schema::create('tandanbuahs', function (Blueprint $table) {
            $table->uuid('id')->primary()->nullable(false); 
            $table->Integer('panen_masuk');
            $table->Integer('tbs_diolah');
            $table->enum('kategori', ['buah-kebun-banyu', 'pihak-ketiga']);
            $table->timestamp('tanggal', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tandanbuahs');
    }
};
