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

class klantController extends BaseController
{
    
public function index(Request $request)
    {
        $klant = DB::table('klanten_raamsdonk')->orderBy('KlantId')->paginate(10);
        return view('klant',compact('klant'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


public function showKlant($id)
{



  $klant = DB::table('klanten_raamsdonk')->where('KlantId', $id) ->first();
    return view('showKlant')->with('klant', $klant);

}

    public function createKlant()
    {
  $KlantId = Input::get('KlantId');
  $Achternaam = Input::get('Achternaam');  
  $Voorletters = Input::get('Voorletters');  
  $Voorvoegsel = Input::get('Voorvoegsel');  
  $Adres = Input::get('Adres');  
  $Postcode = Input::get('Postcode');
  $Plaats = Input::get('Plaats');
  $Telefoonnummer = Input::get('Telefoonnummer');
  $Korting = Input::get('Korting');  
  $Volgnummer = Input::get('Volgnummer');
 

    DB::table('klanten_raamsdonk')
        
            ->insert(['Achternaam' => $Achternaam,
            'Voorletters' => $Voorletters,
            'Voorvoegsel' => $Voorvoegsel,
            'Adres' => $Adres,
            'Postcode' => $Postcode,
            'Plaats' => $Plaats,
            'Telefoonnummer' => $Telefoonnummer,
            'Korting' => $Korting,
           'Volgnummer' => $Volgnummer]
            );
  
            
         
  

            


    //return view('productAanpassen')->with('row', $row)
   return view('createKlant');
}
   




public function deleteKlant($id)
  {



  DB::table('klanten_raamsdonk')
            ->where('KlantId', $id)
            ->delete();

            
    //return view('productAanpassen')->with('row', $row)
                $getData = DB::table('klanten_raamsdonk')->where('KlantId', $id) ->first();
 return redirect()->back();

}
public function deleteKlantInduv($id)
  {



  DB::table('klanten_raamsdonk')
            ->where('KlantId', $id)
            ->delete();

            
    //return view('productAanpassen')->with('row', $row)
$klant = DB::table('klanten_raamsdonk')->orderBy('KlantId')->paginate(10);
        return view('klant',compact('klant'));
}


public function klantEdit($id){

    $product = DB::table('klanten_raamsdonk')->where('KlantId', $id) ->first();
    return view('klantEdit')->with('row', $product);


    
  }

    public function klantaddUpdate($id, Request $request)
  {

  $KlantId = Input::get('KlantId');
  $Achternaam = Input::get('Achternaam');  
  $Voorletters = Input::get('Voorletters');  
  $Voorvoegsel = Input::get('Voorvoegsel');  
  $Adres = Input::get('Adres');  
  $Postcode = Input::get('Postcode');
  $Plaats = Input::get('Plaats');
  $Telefoonnummer = Input::get('Telefoonnummer');
  $Korting = Input::get('Korting');  
  $Volgnummer = Input::get('Volgnummer');
 

    DB::table('klanten_raamsdonk')
            ->where('KlantId', $id)
            ->update(['Achternaam' => $Achternaam,
            'Voorletters' => $Voorletters,
            'Voorvoegsel' => $Voorvoegsel,
            'Adres' => $Adres,
            'Postcode' => $Postcode,
            'Plaats' => $Plaats,
            'Telefoonnummer' => $Telefoonnummer,
            'Korting' => $Korting,
           'Volgnummer' => $Volgnummer]
            );
  

              $row = DB::table('klanten_raamsdonk')->where('KlantId', $id) ->first();



    //return view('productAanpassen')->with('row', $row)
   return redirect()->back()->with('row', $row);
}


public function showKlantDate($id)
  {/*

  $KlantId = Input::get('KlantId');
  $Achternaam = Input::get('Achternaam');  
  $Voorletters = Input::get('Voorletters');  
  $Voorvoegsel = Input::get('Voorvoegsel');  
  $Adres = Input::get('Adres');  
  $Postcode = Input::get('Postcode');
  $Plaats = Input::get('Plaats');
  $Telefoonnummer = Input::get('Telefoonnummer');
  $Korting = Input::get('Korting');  
  $Volgnummer = Input::get('Volgnummer');
  $start = Input::get('startDate');
  $end = Input::get('endDate');
 

   $row=  DB::table('bestellingen2_raamsdonk')
            ->where('KlantId', $id) AND whereBetween($start, $end) -> get();
            
            
  

              
*/

    //return view('productAanpassen')->with('row', $row)
   return 'helloworld';
}

}