<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacationPrice extends Model
{
    protected $fillable = [
                'vacation_id',
                'start_date',
                'end_date',
                'price',
                'sale_price',
    ];
}
