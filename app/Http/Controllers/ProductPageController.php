<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductPageController extends Controller
{
    public function productView($id){
        return view('product.productView');
    }
}
