<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class front_controller extends Controller
{
	public function index()
	[
		$all_products=DB::table('products')->get();
      $tv=DB::table('products')->where('category','5')->get();
   	// print_r($all_products);exit();
   	$electronics=DB::table('products')->where('category','1')->get();
   	$men=DB::table('products')->where('category','2')->get();
      $kid=DB::table('products')->where('category','4')->get();
   	$women=DB::table('products')->where('category','3')->get();
       //return view("user.front");
   	 
   	
	]
   
}
