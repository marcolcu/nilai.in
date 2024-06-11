<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanKursus extends Model
{
    protected $fillable = [
        'progres',
        'nilai',
        'user_id',
        'kursus_id',
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
}
