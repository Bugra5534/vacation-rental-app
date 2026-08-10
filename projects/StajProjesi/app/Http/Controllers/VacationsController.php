<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;

class VacationsController extends Controller
{
    function index(){
        $vacations = Vacation::getVacationCard();


        $mappingVacation = $vacations->groupBy('id')->map(function ($pricegroup) {

            $price = $pricegroup->first();

            $price->pricerange = $pricegroup->min('price') . "TL - " . $pricegroup->max('price') . "TL";

            return $price;
        });
        return view('vacations', compact('mappingVacation'));
    }

    function detail(){
        return view('vacation-details');
    }
}
