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
use Illuminate\Pagination\LenghtAwarePaginator;


class productviewcontroller extends BaseController {

public function overview()
{
 $data = DB::table('products') ->paginate(2);
 return view('productview')->with('data', $data);


}
  public function edit($id){

  	$row = DB::table('products')->where('id', $id) ->first();


  	return view('productAanpassen')->with('row', $row);
  }


}