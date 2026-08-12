<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacationForm extends Model
{
    protected $fillable = [
                'vacation_id',
                'start_date',
                'end_date',
                'phone',
                'email',
                'status',
    ];
}
