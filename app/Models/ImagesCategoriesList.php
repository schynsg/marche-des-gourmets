<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesCategoriesList extends Model
{
    use HasFactory;

    public function images() {
        return $this->hasMany(image::class, 'category_id');
    }
}
