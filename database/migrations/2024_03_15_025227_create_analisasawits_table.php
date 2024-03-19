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
        Schema::create('analisasawits', function (Blueprint $table) {
            $table->uuid('id')->primary()->nullable(false); 
            $table->float('vm',$precision = 5);
            $table->float('nos',$precision = 5 );
            $table->float('ffa',$precision = 5 );
            $table->float('dobi',$precision = 5); 
            $table->timestamp('waktu_analisis', $precision = 0);
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
        Schema::dropIfExists('analisasawits');
    }
};
