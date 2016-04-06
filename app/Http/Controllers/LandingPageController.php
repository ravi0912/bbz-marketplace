<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class LandingPageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Landing Page
     * Showing Product sorted with Category only first 5
     */
    public function home(){
        $category = Category::get();
        $category_count = Category::count();
        $subcategory = SubCategory::get();
        for($i=1;$i<=$category_count;$i++){
           $products[$i] =  Product::where('category_id',$i)->orderByRaw("RAND()")->groupby('name')->take(5)->get();
        }
        //return $products;
        return view('LandingPage.home1',['categories' => $category,'subcategories' => $subcategory,'products' => $products]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Showing Product sorted with Subcategory
     */
    public function productCategory($id){
        $category = Category::get();
        //$category_count = Category::count();
        $subcategory = SubCategory::get();
        $subcats = SubCategory::where('category_id',$id)->get();
        //$subcat_count = SubCategory::where('category_id',$id)->count();
        $categoryName = Category::where('id',$id)->first();
        foreach($subcats as $subcat){
            $products[$subcat->id] =  Product::where('sub_category_id',$subcat->id)->orderByRaw("RAND()")->groupby('name')->take(10)->get();
        }

        return view('LandingPage.productCategory',['categories' => $category,'subcategories' => $subcategory,'products' => $products,'subcats' => $subcats,'categoryName' => $categoryName]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Showing Product sorted with Subcategory
     */
    public function productSubcategory($id){
        $category = Category::get();
        //$category_count = Category::count();
        $subcategory = SubCategory::get();
        $subcategoryName = SubCategory::whereId($id)->first();
        $categoryName = Category::whereId($subcategoryName->id)->first();
        $products = Product::where('sub_category_id',$id)->get();


        return view('LandingPage.productSubcategory',['categories' => $category,'subcategories' => $subcategory,'products' => $products,'subcategoryName' => $subcategoryName,'categoryName' => $categoryName]);
    }
}
