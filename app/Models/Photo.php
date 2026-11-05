<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    public function article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class)->using(ArticlePhoto::class);
    }
}
