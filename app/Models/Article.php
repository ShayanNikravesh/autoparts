<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    public function photo(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class)->using(ArticlePhoto::class);
    }
}
