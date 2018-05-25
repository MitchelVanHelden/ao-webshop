<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;



class ProductsController extends Controller
{
		public function index(){
    	$products = Products::All();
		return view('products.index', compact('products'));
	}
	public function display($id)
	{
		$products = Products::findOrFail($id);
        session::flash('message', 'Product has been added to your shopping cart!');
		return view('products.product_details', compact('products'));

    }
}
