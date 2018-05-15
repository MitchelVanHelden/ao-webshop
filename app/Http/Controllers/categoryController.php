<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\products;



class categoryController extends Controller
{

	public function index()
	{
		//$categories = DB::table('categories')->get();
		$categories = Categories::All();
		return view('categories.index', compact('categories'));
	}
	public function display($id)
	{
		
		$categories = Categories::findOrFail($id);
     	return view('categories.category_products', compact('categories'));


		

	}
}
