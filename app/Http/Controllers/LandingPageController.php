<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class LandingPageController extends Controller
{
    public function home(){
        $category = Category::get();
        $category_count = Category::count();
        $subcategory = SubCategory::get();
        for($i=1;$i<=14;$i++){
           $products[$i] =  Product::where('category_id',$i)->orderByRaw("RAND()")->groupby('name')->take(5)->get();
        }
        //return $products;
        return view('LandingPage.home1',['categories' => $category,'subcategories' => $subcategory,'products' => $products]);
    }
}
