<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'tingkat',
        'jurusan',
        'wali',
        'ketua',
    ];
    use HasFactory;
    // public function materi()
    // {
    //     return $this->hasMany(Materi::class);
    // }
    // public function penggunaankursus()
    // {
    //     return $this->hasMany(PenggunaanKursus::class);
    // }
    // public function ujian()
    // {
    //     return $this->hasMany(Ujian::class);
    // }
}
