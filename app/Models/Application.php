<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'website',
        'address',
        'postal_code',
        'city',
        'country',
        'description',
        'is_bio'
    ];

    public function filters() {
        return $this->belongsToMany(filter::class);
    }
}
