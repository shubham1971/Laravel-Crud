<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {

    	
    	return view('frontend.index');
    }

    public function product()
    {

    	$product = Product::where('status','0')->get();
    	return view('frontend.product',compact('product'));
    }
}
