<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//routes for auth
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

/*
 * Landing Page
 * with full categorised product
 *
 */
Route::get('/', 'LandingPageController@home');
Route::get('home', 'LandingPageController@home');


/*
 * Product Page
 */
Route::get('product/{id}', 'ProductPageController@productView');

/*
 * Product according to Category
 */
Route::get('category/{id}', 'LandingPageController@productCategory');

/*
 * Product according to Subcategory
 */
Route::get('subCategory/{id}', 'LandingPageController@productSubcategory');

/*
 * Selecting thumbnail image for product
 */
Route::get('selectProduct', 'LandingPageController@selectProduct');
Route::get('selectProductImage/{id}', 'LandingPageController@selectProductImage');
Route::get('selectedImage', 'LandingPageController@selectedImage');