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

class productCRUDcontroller extends BaseController
{
    
public function index(Request $request)
    {
        $products = DB::table('producten_raamsdonksveer')->orderBy('Produktnummer')->paginate(12);
        return view('productCRUD',compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    public function create()
    {
      $naam = Input::get('naam');
  $prijs = Input::get('prijs');  
  $route = Input::get('route');  
  $btw = Input::get('btw');  
  $groep = Input::get('groep');    

            
           
            DB::table('producten_raamsdonksveer') ->insert
           (
            ['Naamprodukt' => $naam,
            'PrijsEenheid' => $prijs,
            'Prijsroute' => $route,
            'btw' => $btw,
            'groep' => $groep]
            );
  

            


    //return view('productAanpassen')->with('row', $row)
   return view('CRUDcreate');
}
   


    public function show($id)
    {
        $product= producten_raamsdonksveer::find($id);
        return view('ProductCRUD.show',compact('producten_raamsdonksveer'));
    }


     public function edit($id){

  	$product = DB::table('producten_raamsdonksveer')->where('produktnummer', $id) ->first();
  	return view('CRUDedit')->with('row', $product);
  	
  }


  public function addUpdate($id, Request $request)
  {

  $naam = Input::get('naam');
  $prijs = Input::get('prijs');  
  $route = Input::get('route');  
  $btw = Input::get('btw');  
  $groep = Input::get('groep');    

    DB::table('producten_raamsdonksveer')
            ->where('produktnummer', $id)
            ->update(['Naamprodukt' => $naam ,'PrijsEenheid' => $prijs ,'Prijsroute' => $route, 'btw' => $btw, 'groep' => $groep]);
  

              $row = DB::table('producten_raamsdonksveer')->where('produktnummer', $id) ->first();



    //return view('productAanpassen')->with('row', $row)
   return redirect()->back()->with('row', $row);
}


 



public function deleteCrud($id)
  {

    $image = DB::table('producten_raamsdonksveer') ->where('produktnummer', $id) ->first(); 
  //DB::insert('UPDATE products SET price = $prijs WHERE id = 442')

  DB::table('producten_raamsdonksveer')
            ->where('produktnummer', $id)
            ->delete();

            
    //return view('productAanpassen')->with('row', $row)
                $getData = DB::table('producten_raamsdonksveer')->where('produktnummer', $id) ->first();
 return redirect()->back();

}




    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
        ]);
        Product::find($id)->update($request->all());
        return redirect()->route('productCRUD.index')
                        ->with('success','Product updated successfully');
    }
   


}