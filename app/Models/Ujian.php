<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = [
        'pertanyaan',
        'benar',
        'salah1',
        'salah2',
        'salah3',
        'salah4',
        'kursus_id',
    ];
    use HasFactory;
}
