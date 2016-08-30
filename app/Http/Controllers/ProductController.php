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



class ProductController extends BaseController {

  public function add(){

  $naam = Input::get('naam');
  $prijs = Input::get('prijs');
  $beschrijving = Input::get('beschrijving');
  $postNL = Input::get('PostNL');
  $waarschuwwing = Input::get('waarschuwwing');
  $prijsaanbieding = Input::get('prijsaanbieding');
 $file = Input::get('file');


  
/*
  $data = array('naam' => $naam,
  				'prijs' => $prijs,
  				'beschrijving' => $beschrijving,
  				'postNL' => $postNL,
  				'waarschuwwing' => $waarschuwwing,
  				'prijsaanbieding' => $prijsaanbieding);

return  $data;
*/
DB::insert('insert into products (categories, name, price, type, rating, warning, path) values (?, ?, ?, ?, ?, ?, ?)', 
	array('EmptyFromController', $naam, $prijs,'standaard', '1', $waarschuwwing, "inventory_images/$file"));


//$file = Input::file('imagePath');
//$destinationPath = 'inventory_images/';
//$filename = $file->getClientOriginalName();
//Input::file('image')->move($destinationPath, $filename);
//return DB::select('select * from products');
   // 'postNL'=>input::get('postNL'),
   // 'waarschuwing'=>input::get('waarschuwing'),
    //'aanbieding'=>input::get('aanbieding')


  $lastAdded = (new lastAdded)->returnLastAdded();
  return $lastAdded;


  }


  public function addUpdate($id)
  {

  $naam = Input::get('naam');
  $prijs = Input::get('prijs');
  $beschrijving = Input::get('beschrijving');
  $postNL = Input::get('PostNL');
  $waarschuwwing = Input::get('waarschuwwing');
  $prijsaanbieding = Input::get('prijsaanbieding');


  //DB::insert('UPDATE products SET price = $prijs WHERE id = 442')

  DB::table('products')
            ->where('id', $id)
            ->update(['price' => $prijs, 'name' => $naam] );

              $row = DB::table('products')->where('id', $id) ->first();
    //return view('productAanpassen')->with('row', $row)
    return redirect()->back()->with('row', $row);
}

public function delete($id)
  {


  //DB::insert('UPDATE products SET price = $prijs WHERE id = 442')

  DB::table('products')
            ->where('id', $id)
            ->delete();

            
    //return view('productAanpassen')->with('row', $row)
                $getData = DB::table('products')->where('id', $id) ->first();
 return redirect()->back();

}
}