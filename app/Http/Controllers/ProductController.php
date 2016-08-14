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
use DB;


class ProductController extends BaseController {

  public function add(){

  $naam = Input::get('naam');
  $prijs = Input::get('prijs');
  $beschrijving = Input::get('beschrijving');
  $postNL = Input::get('PostNL');
  $waarschuwwing = Input::get('waarschuwwing');
  $prijsaanbieding = Input::get('prijsaanbieding');
/*
  $data = array('naam' => $naam,
  				'prijs' => $prijs,
  				'beschrijving' => $beschrijving,
  				'postNL' => $postNL,
  				'waarschuwwing' => $waarschuwwing,
  				'prijsaanbieding' => $prijsaanbieding);

return  $data;
*/
DB::insert('insert into products (categories, name, type, rating, warning, path) values (?, ?, ?, ?, ?, ?)', 
	array('EmptyFromController', $naam, 'standaard', '1', $waarschuwwing, 'EmptyFromController'));

//return DB::select('select * from products');
   // 'postNL'=>input::get('postNL'),
   // 'waarschuwing'=>input::get('waarschuwing'),
    //'aanbieding'=>input::get('aanbieding')
return view('productToevoegen');
  }


}