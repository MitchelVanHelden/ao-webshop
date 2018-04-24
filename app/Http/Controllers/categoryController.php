<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Articles;



class categoryController extends Controller
{

	public function index()
	{
		//$categories = DB::table('categories')->get();
		$categories = Categories::All();
		return view ('categories.index')->with('categories',$categories); 
	}
}
