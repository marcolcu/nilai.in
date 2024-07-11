<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'kkm',
        'IDMataPelajaran',
    ];
    use HasFactory;
    protected $table = 'ujians';
    // public function kursus()
    // {
    //     return $this->belongsTo(Kursus::class);
    // }
}
