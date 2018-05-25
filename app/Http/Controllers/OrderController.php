<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Products;
use app\Categories;
use App\ShoppingCart;
use App\OrderDetail;
use Auth;
use Input;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = new Shoppingcart($request);
    }

        public function add(Request $request)
    {
        $cart = new Shoppingcart($request);

    }

}
