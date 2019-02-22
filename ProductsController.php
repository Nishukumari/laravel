<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

	 public function index()
   {
    $product=new \App\Product;
   	$list= $product::all();
   	return view("products.index",compact('list'));
   }
    public function index1()
   {
    $product=new \App\Product;
   	$list= $product::all();
   	return view("products.index1",compact('list'));
   }
}
