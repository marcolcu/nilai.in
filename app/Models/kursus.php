<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $fillable = [
        'name',
        'deksripsi',
        'jadwalmulai',
        'jadwalselesai',
    ];
    use HasFactory;
}
