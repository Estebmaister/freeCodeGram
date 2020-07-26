<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // The guarded is done in the controller

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
