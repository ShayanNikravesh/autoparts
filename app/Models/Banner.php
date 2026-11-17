<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function photos()
    {
        return $this->belongsToMany(Photo::class, 'banner_photo', 'banner_id', 'photo_id')->withTimestamps();
    }
}
