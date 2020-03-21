<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
