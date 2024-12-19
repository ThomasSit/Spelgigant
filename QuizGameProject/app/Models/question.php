<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['quiz_id', 'question_text'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    // Een vraag heeft veel antwoorden
    public function answers()
    {
        return $this->hasMany(answers::class);
    }
}
