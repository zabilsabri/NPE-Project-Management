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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('nomorTelpon');
            $table->unsignedTinyInteger('divisi')->nullable(); // 0 -> Web | 1 -> Mobile | 2 -> UI/IX
            $table->unsignedTinyInteger('jabatan')->nullable(); // 0 -> Senior | 1 -> Junior | 2 -> Trainee
            $table->string('password');
            $table->integer('credit')->default(10);
            $table->boolean('isAdmin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
