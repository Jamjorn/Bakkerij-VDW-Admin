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

class BakkerijOverzichtController extends BaseController
{
    
public function index(Request $request)
    {
        $Routenummer = DB::table('bestellingen2_raamsdonk')->groupBy('Routenummer')->get();




        return view('ShopRoute',compact('Routenummer'));
    }



  public function getDates(){
 $start = Input::get('to');
  $end = Input::get('from');
  $date = $_POST['datepicker'];

$row = DB::table('bestellingen2_raamsdonk')->whereBetween('Afhaaldatum',[$start,$end])->get();
            



  return view('/bakkerijOverzicht', compact('row', 'start', 'end'));

}




}