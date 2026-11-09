<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductPhoto extends Pivot
{
    protected $table = 'product_photo';
}
