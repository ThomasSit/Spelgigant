<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quizResults extends Model
{
    protected $fillable = ['quiz_id', 'user_id', 'score', 'started_at', 'finished_at', 'updated_at'];
    protected $casts = [
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
