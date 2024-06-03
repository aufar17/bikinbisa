<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserTask extends Model
{
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'user_id',
        'task_id',
        'jawaban_task_id',
        'jawaban',
    ];

    /**
     * Get the jawaban associated with the UserTask
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function task1Rekomen1(): HasOne
    {
        return $this->hasOne(Task1Rekomen1::class, 'id', 'jawaban_task_id');
    }
}
