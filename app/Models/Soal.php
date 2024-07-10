<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = [
        'tipe',
        'pertanyaan',
        'kunci',
        'pilihan1',
        'pilihan2',
        'pilihan3',
        'pilihan4',
        'pilihan5',
        'IDUjian',
    ];
    use HasFactory;
    // public function kursus()
    // {
    //     return $this->belongsTo(Kursus::class);
    // }
}
