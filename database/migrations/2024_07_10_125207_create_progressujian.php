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
        Schema::create('progressujians', function (Blueprint $table) {
            $table->id();
            $table->string('nilai');
            $table->string('notes');
            $table->foreignId('IDUjian')->references('id')->on('ujians')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('IDUser')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progressujian');
    }
};
