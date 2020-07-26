<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // The guarded is done in the controller

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'defaultProfile.png';
        return "/storage/" . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
