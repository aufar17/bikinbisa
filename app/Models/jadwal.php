<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    // Nama tabel jika tidak mengikuti konvensi nama jamak
    protected $table = 'jadwal';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'hari',
        'jam',
        'aktivitas',
        'pelajaran',
        'mentor'
    ];
}
