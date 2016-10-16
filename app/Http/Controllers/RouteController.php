<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\UpdateClinicDescriptionFormRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use App\Http\Controllers\lastAdded;
use DB;

use File;

class RouteController extends BaseController
{
    
public function index(Request $request)
    {
        $Routenummer = DB::table('bestellingen2_raamsdonk')->groupBy('Routenummer')->get();




        return view('ShopRoute',compact('Routenummer'));
    }



    public function showRouteDetails()
    {
         $number = Input::get('routeNumber');
 $routeNumber = DB::table('bestellingen2_raamsdonk')->where('Routenummer',$number)->groupBy('KlantId')->get();
// $totalPrice = DB::table('bestellingen2_raamsdonk')->where('Routenummer',$number)->get();
/*
 $Tot = DB::table('bestellingen2_raamsdonk')
           ->selectRaw('SUM(Totaalprijs) as total')
           ->where('Routenummer',$number)
           ->groupBy('KlantId')
           ->pluck('total');
*/$Tot =  \DB::table('bestellingen2_raamsdonk')
    ->selectRaw('Routenummer,KlantId, sum(Totaalprijs) as sum')
    ->where('Routenummer',$number)
    ->groupBy('KlantId')
    ->get();
//array = array_merge($routeNumber, $total);
  
 // $response = \Response::json($array);
       //return $array;
        //  return view('ShopRoute')->with('routenummer', $routenummer);   
         return view('ShopRoute',compact('Tot', 'routeNumber' )); 
    }




}