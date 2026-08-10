<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
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

    public static function getVacationCard(){

        return DB::table('vacations')
            ->join('vacation_prices', 'vacations.id', '=', 'vacation_prices.vacation_id')
            ->get(['vacations.*', 'vacation_prices.price']);

    }

}
