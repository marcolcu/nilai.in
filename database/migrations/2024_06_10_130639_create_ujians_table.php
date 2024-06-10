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
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');
            $table->string('benar');
            $table->string('salah1')->nullable();
            $table->string('salah2')->nullable();
            $table->string('salah3')->nullable();
            $table->string('salah4')->nullable();
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
        Schema::dropIfExists('ujians');
    }
};
