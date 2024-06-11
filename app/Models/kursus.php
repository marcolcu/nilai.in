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
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
    public function penggunaankursus()
    {
        return $this->hasMany(PenggunaanKursus::class);
    }
    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}
