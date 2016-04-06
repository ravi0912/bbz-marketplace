<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductPageController extends Controller
{
    /*
     * Only display
     * Single product view with Details
     * Q & A of product
     * Rating and Reviews
     */

    public function productView($id){
        $category = Category::get();
        //$category_count = Category::count();
        $subcategory = SubCategory::get();
        $product = Product::where('id',$id)->first();
        return view('product.productView',['categories' => $category,'subcategories' => $subcategory,'product' => $product]);
    }

}
