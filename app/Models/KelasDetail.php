<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasDetail extends Model
{
    protected $fillable = [
        'IDMataPelajaran',
        'IDKelas',
    ];
    use HasFactory;
    protected $table = 'kelasdetails';
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function kursus()
    // {
    //     return $this->belongsTo(Kursus::class);
    // }
}
