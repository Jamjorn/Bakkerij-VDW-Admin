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

class ProductController extends BaseController {

  public function create(Request $request){

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
	array('EmptyFromController', $naam, $prijs,'standaard', '1', $waarschuwwing, "inventory_images/".$_FILES['file']['name']));

     $imageName = time().'.'. $request->file->getClientOriginalExtension();
        $request->file->move(public_path('inventory_images'), $_FILES['file']['name']);



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





  public function addUpdate($id, Request $request)
  {

  $naam = Input::get('naam');
  $prijs = Input::get('prijs');
  $beschrijving = Input::get('beschrijving');
  $postNL = Input::get('PostNL');
  $waarschuwwing = Input::get('waarschuwwing');
  $prijsaanbieding = Input::get('prijsaanbieding');
   $file = Input::get('file');

    DB::table('products')
            ->where('id', $id);


  //DB::insert('UPDATE products SET price = $prijs WHERE id = 442')
 if (Input::hasFile('file')) {

      $image = DB::table('products') ->where('id', $id) ->first(); 
  //DB::insert('UPDATE products SET price = $prijs WHERE id = 442')
File::delete($image->path);

 DB::table('products')
            ->where('id', $id)
            ->update(['price' => $prijs, 'name' => $naam,'categories' => $beschrijving, 'warning' => $waarschuwwing, 'path' => "inventory_images/".$_FILES['file']['name']]  );
             $request->file->move(public_path('inventory_images'), $_FILES['file']['name']);
 
  }else
  {

    DB::table('products')
            ->where('id', $id)
            ->update(['price' => $prijs, 'name' => $naam,'categories' => $beschrijving, 'warning' => $waarschuwwing ]);
  }



              $row = DB::table('products')->where('id', $id) ->first();



    //return view('productAanpassen')->with('row', $row)
    return redirect()->back()->with('row', $row);
}






public function delete($id)
  {

    $image = DB::table('products') ->where('id', $id) ->first(); 
  //DB::insert('UPDATE products SET price = $prijs WHERE id = 442')
File::delete($image->path);
  DB::table('products')
            ->where('id', $id)
            ->delete();

            
    //return view('productAanpassen')->with('row', $row)
                $getData = DB::table('products')->where('id', $id) ->first();
 return redirect()->back();

}
}