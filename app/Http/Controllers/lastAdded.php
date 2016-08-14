<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use DB;

class lastAdded extends Controller
{
    
	public function returnLastAdded()
	{
	//$products = Products::Select('products')->orderBy('created_at', 'desc', 'limit', '3')->first();
		

		$latest = DB::select( DB::raw("SELECT * FROM products ORDER BY created_at asc limit 3") ); 
       return view('productToevoegen', compact('latest', $latest));
	}


}
