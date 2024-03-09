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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->uuid('id')->primary()->nullable(false);
            $table->string('nama');
            $table->string('nomor_mesin');
            $table->string('merek');
            $table->char('tahun_perolehan', 4);
            $table->string('type');
            $table->string('kapasitas');
            $table->string('nomor_inventaris');
            $table->string('nilai_aktiva');
            $table->char('kondisi_mesin', 3);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category_inventaris');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
