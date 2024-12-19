<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function questions()
    {
        return $this->hasMany(question::class);
    }
}
