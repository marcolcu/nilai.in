<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'IDKelas',
    ];
    use HasFactory;
    protected $table = 'matapelajarans';
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function kursus()
    // {
    //     return $this->belongsTo(Kursus::class);
    // }
}
