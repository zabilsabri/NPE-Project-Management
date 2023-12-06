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
            $table->unsignedTinyInteger('status')->default(0); // 0 -> On Progress | 1 -> Selesai | 2 -> revisi | 3 -> pending (Menunggu Review Dari Admin)
            $table->string('detail')->nullable();
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
