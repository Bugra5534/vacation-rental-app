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

    public static function getVacationDetails($id){

        return DB::table('vacations')
            ->leftjoin('Vacation_forms', 'vacations.id', '=', 'Vacation_forms.vacation_id')
            ->where('vacations.id',$id)
            ->first();
    }
    public static function getVacationDetailExtras($id){
        return DB::table('vacations')
            ->leftjoin('vacation_extras', 'vacations.id', '=', 'vacation_extras.vacation_id')
            ->leftJoin('extras', 'vacation_extras.extra_id', '=', 'extras.id')
            ->where('vacations.id', $id)
            ->get(['vacations.*', 'vacation_extras.*', 'extras.name']);
    }

    public static function getVacationPrices($id){
        return DB::table('vacations')
            ->leftjoin('vacation_prices', 'vacations.id', '=', 'vacation_prices.vacation_id')
            ->where('vacations.id', $id)
            ->get(['vacation_prices.*']);


    }
}
