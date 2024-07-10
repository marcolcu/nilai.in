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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->string("tipe");
            $table->string("pertanyaan");
            $table->string("pilihan1");
            $table->string("pilihan2");
            $table->string("pilihan3");
            $table->string("pilihan4");
            $table->string("pilihan5");
            $table->string("kunci");
            $table->foreignId('IDUjian')->references('id')->on('ujians')->onUpdate('cascade')->onDelete('cascade');
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
