<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Articles;



class ArticlesController extends Controller
{
		public function index(){
    	$articles = Articles::All();
		return view ('articles.index')->with('articles',$articles); 
	}
}
