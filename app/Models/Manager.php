<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Manager extends Authenticatable
{
    protected $table = 'managers';
    protected $hidden = ['password'];

    public function photo(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class)->using(ManagerPhoto::class)->withTimestamps();
    }
}
