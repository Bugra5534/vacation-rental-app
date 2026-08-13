<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;

class VacationsController extends Controller
{
    function index(){
//        $vacations = Vacation::getVacationCard();

//        $mappingVacation = $vacations->groupBy('id')->map(function ($pricegroup) {
//
//            $price = $pricegroup->first();
//
//            $price->pricerange = $pricegroup->min('price') . "TL - " . $pricegroup->max('price') . "TL";
//
//            return $price;
//        });

        $mappingVacation = Vacation::getPaginatedVacations(1);

        return view('vacations', compact('mappingVacation'));
    }

    function detail($id){
        $vacationdetail = Vacation::getVacationDetails($id);
        $vacationdetailextra = Vacation::getVacationDetailExtras($id);
        $vacationdetailprice = Vacation::getVacationPrices($id);

        $minPrice = $vacationdetailprice->min('price');
        $maxPrice = $vacationdetailprice->max('price');

        $vacationdetailprice->pricerange = $minPrice . "TL - " . $maxPrice . "TL";


        return view('vacation-details', compact('vacationdetail', 'vacationdetailextra', 'vacationdetailprice'));
    }
}
