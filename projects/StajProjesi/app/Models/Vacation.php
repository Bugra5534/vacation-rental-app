<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $fillable = [
            'title',
            'slug',
            'description',
            'user_id',
            'feature_status',
            'location',
            'image',
        ];
}
