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
        Schema::create('penggunaan_kursuses', function (Blueprint $table) {
            $table->id();
            $table->integer('progres');
            $table->integer('nilai');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kursus_id')->references('id')->on('kursuses')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunaan_kursuses');
    }
};
