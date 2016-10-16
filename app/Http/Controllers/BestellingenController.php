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

class BestellingenController extends BaseController
{
    
public function index(Request $request)


    {
        $bestellingen = DB::table('bestellingen2_raamsdonk')->orderBy('bestelnummer')->paginate(7);
        return view('bestellingen',compact('bestellingen'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    public function createBestelling()
    {
  $Routenummer = Input::get('Routenummer');
  $Klantnummer = Input::get('KlantId');  
  $Produkt = Input::get('Produkt');  
  $Produktnummer = Input::get('Produktnummer');  
  $Hoeveelheid = Input::get('Hoeveelheid');  
  $Totaalprijs = Input::get('Totaalprijs');
  $Afhaaldatum = Input::get('Afhaaldatum');
  $Opmerkingen = Input::get('Opmerkingen');
  $Vastebestelling = Input::get('Vastebestelling');  
  $Vastebestellingdag = Input::get('Vastebestellingdag');
  $Prijsprodukt = Input::get('Prijsprodukt');
  $Volgnummer = Input::get('volgnummer');
  $Betaald = Input::get('Betaald');
  $Status= Input::get('Status');

            
           
            DB::table('bestellingen2_raamsdonk') ->insert
           (
            ['Routenummer' => $Routenummer,
            'Klantnummer' => $KlantId,
            'Produkt' => $Produkt,
            'Produktnummer' => $Produktnummer,
            'Hoeveelheid' => $Hoeveelheid,
            'Totaalprijs' => $Totaalprijs,
            'Afhaaldatum' => $Afhaaldatum,
            'Opmerkingen' => $Opmerkingen,
            'Vastebestelling' => $Vastebestelling,
            'Vastebestellingdag' => $Vastebestellingdag,
            'Prijsprodukt' => $Prijsprodukt,
            'volgnummer' => $volgnummer,
            'Betaald' => $Betaald,
            'Status' => $Status]
            );
  

            


    //return view('productAanpassen')->with('row', $row)
   return view('createBestelling');
}
   




public function deleteBestelling($id)
  {



  DB::table('bestellingen2_raamsdonk')
            ->where('bestelnummer', $id)
            ->delete();

            
    //return view('productAanpassen')->with('row', $row)
                $getData = DB::table('producten_raamsdonksveer')->where('produktnummer', $id) ->first();
 return redirect()->back();

}


public function bestellingEdit($id){

    $product = DB::table('bestellingen2_raamsdonk')->where('bestelnummer', $id) ->first();
    return view('bestellingEdit')->with('row', $product);


    
  }

    public function bestellingaddUpdate($id, Request $request)
  {

  $Routenummer = Input::get('Routenummer');
  $Klantnummer = Input::get('Klantnummer');  
  $Produkt = Input::get('Produkt');  
  $Produktnummer = Input::get('Produktnummer');  
  $Hoeveelheid = Input::get('Hoeveelheid');  
  $Totaalprijs = Input::get('Totaalprijs');
  $Afhaaldatum = Input::get('Afhaaldatum');
  $Opmerkingen = Input::get('Opmerkingen');
  $Vastebestelling = Input::get('Vastebestelling');  
  $Vastebestellingdag = Input::get('Vastebestellingdag');
  $Prijsprodukt = Input::get('Prijsprodukt');
  $Volgnummer = Input::get('Volgnummer');
  $Betaald = Input::get('Betaald');
  $Status= Input::get('Status');            
   

    DB::table('bestellingen2_raamsdonk')
            ->where('bestelnummer', $id)
            ->update(['Routenummer' => $Routenummer,
            'KlantId' => $Klantnummer,
            'Produkt' => $Produkt,
            'Produktnummer' => $Produktnummer,
            'Hoeveelheid' => $Hoeveelheid,
            'Totaalprijs' => $Totaalprijs,
            'Afhaaldatum' => $Afhaaldatum,
            'Opmerkingen' => $Opmerkingen,
            'Vastebestelling' => $Vastebestelling,
            'Vastebestellingdag' => $Vastebestellingdag,
            'Prijsprodukt' => $Prijsprodukt,
            'volgnummer' => $Volgnummer,
            'Betaald' => $Betaald,
            'Status' => $Status]
            );
  

              $row = DB::table('bestellingen2_raamsdonk')->where('bestelnummer', $id) ->first();



    //return view('productAanpassen')->with('row', $row)
   return redirect()->back()->with('row', $row);
}

}