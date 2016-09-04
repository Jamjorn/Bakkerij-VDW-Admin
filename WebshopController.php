<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;

class WebshopController extends Controller
{
    
	public function initializeWebshop()
	{
		$products = Products::where('categories','LIKE', '%Specialiteiten%')->get();
		return view('webshop', compact('products', $products));
	}

	public function setPaths(Request $request){
		
		$dir = "inventory_images/";

		$files = scandir($dir);

		foreach ($files as $file) {

			if ($file == '.' || $file == '..' || $file == '...') {
				// noppes
			} else {
				// zet records in database
				$bareName = pathinfo($file, PATHINFO_FILENAME);
				Products::where('id', $bareName)
		         		->update(['path' => 'inventory_images/' . $file]);
			}
		}


		return;
	}

}
