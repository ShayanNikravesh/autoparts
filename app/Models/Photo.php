<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    public function article(): BelongsToMany
    {
        return $this->belongsToMany(Article::class)->using(ArticlePhoto::class)->withTimestamps();
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_photo', 'photo_id', 'product_id')->withPivot('sort')->withTimestamps();
    }

    public function manager(): BelongsToMany
    {
        return $this->belongsToMany(Manager::class)->using(ManagerPhoto::class)->withTimestamps();
    }
}
