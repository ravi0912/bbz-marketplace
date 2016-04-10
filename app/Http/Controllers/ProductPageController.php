<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductViews;
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
        $productViewCount = ProductViews::where('product_id',$id)->first();
        if($productViewCount->views == 0){
            ProductViews::create([
                'product_id' => $id,
                'views' => 1
                ]);
        }else{
            ProductViews::where('product_id', $id)->update(['views' => ++$productViewCount->views]);
        }
        $subcategory = SubCategory::get();
        $product = Product::where('id',$id)->first();
        return view('product.productView',['categories' => $category,'subcategories' => $subcategory,'product' => $product]);
    }

}
