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

//    public static function getVacationCard(){
//
//        return DB::table('vacations')
//            ->join('vacation_prices', 'vacations.id', '=', 'vacation_prices.vacation_id')
//            ->get(['vacations.*', 'vacation_prices.price']);
//
//    }

    public static function getPaginatedVacations($adet){
        return DB::table('vacations')
            ->join('vacation_prices', 'vacations.id', '=', 'vacation_prices.vacation_id')
            ->selectRaw('vacations.*, MIN(vacation_prices.price) as min_price, MAX(vacation_prices.price) as max_price')
            ->groupBy('vacations.id')
            ->paginate($adet);


    }

    public static function getVacationDetails($id){

        return DB::table('vacations')
            ->leftjoin('Vacation_forms', 'vacations.id', '=', 'Vacation_forms.vacation_id')
            ->where('vacations.id',$id)
            ->first();
    }
    public static function getVacationDetailExtras($id){
        return DB::table('vacation_extras')
            ->leftJoin('extras', 'vacation_extras.extra_id', '=', 'extras.id')
            ->where('vacation_extras.vacation_id',$id)
            ->get(['vacation_extras.*', 'extras.name']);
    }

    public static function getVacationPrices($id){
        return DB::table('vacation_prices')
            ->where('vacation_prices.vacation_id', $id)
            ->get(['vacation_prices.*']);


    }
}
