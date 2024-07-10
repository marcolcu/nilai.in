<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = [
        'jawaban',
        'IDProgressUjian',
        'IDSoal',
    ];
    use HasFactory;
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public function kursus()
    // {
    //     return $this->belongsTo(Kursus::class);
    // }
}
