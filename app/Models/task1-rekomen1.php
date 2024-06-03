<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task1Rekomen1 extends Model
{
    use HasFactory;

    // Nama tabel jika tidak mengikuti konvensi nama jamak
    protected $table = 'task1_rekomen1';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'jawaban',
    ];
}
