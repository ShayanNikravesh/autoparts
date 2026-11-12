<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Manager extends Model
{
    public function photo(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class)->using(ManagerPhoto::class)->withTimestamps();
    }
}
