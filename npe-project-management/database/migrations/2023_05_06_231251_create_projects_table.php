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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('klien');
            $table->string('tipe');
            $table->unsignedBigInteger('pm_id')->nullable();
            $table->date('deadline');
            $table->date('tgl_selesai')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('isReviewed')->default(0); // Untuk Cek Apakah Projek Sudah Direview Oleh Admin Atau Belum
            $table->string('detail');
            $table->timestamps();

            $table->foreign('pm_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
