<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = [
        'judul',
        'deksripsi',
        'konten',
        'tipe',
        'kursus_id',
    ];
    use HasFactory;
}
