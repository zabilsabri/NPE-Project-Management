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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('milestone_id');
            $table->unsignedBigInteger('assign_to_id')->nullable();
            $table->date('deadline');
            $table->boolean('status')->default(0);
            $table->boolean('is_reviewed')->default(0);
            $table->string('detail')->nullable();
            $table->timestamps();

            $table->foreign('milestone_id')
                ->references('id')
                ->on('milestones')
                ->onDelete('cascade');

            $table->foreign('assign_to_id')
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
        Schema::dropIfExists('tasks');
    }
};
