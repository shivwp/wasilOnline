<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//login api
Route::post('login', [App\Http\Controllers\Api\UserApiController::class, 'login']);

//register api
Route::post('register', [App\Http\Controllers\Api\UserApiController::class, 'register']);

Route::post('products', [App\Http\Controllers\Api\ProductApiController::class, 'index'] );
Route::post('product',  [App\Http\Controllers\Api\ProductApiController::class, 'singleproduct'] );
Route::post('new-product',  [App\Http\Controllers\Api\ProductApiController::class, 'newproduct'] );
Route::post('best-seller-product',  [App\Http\Controllers\Api\ProductApiController::class, 'bestseller'] );
Route::post('trending-product',  [App\Http\Controllers\Api\ProductApiController::class, 'trendingProduct'] );
Route::post('feature-product',  [App\Http\Controllers\Api\ProductApiController::class, 'Featureproduct'] );

Route::post('filters', [App\Http\Controllers\Api\ProductApiController::class, 'allFilters'] );

Route::post('home', [App\Http\Controllers\Api\HomepageApiController::class, 'index'] );

Route::post('testimonials', [App\Http\Controllers\Api\TestimonialsApiController::class, 'index'] );

Route::post('product-attributes',[App\Http\Controllers\Api\ProductApiController::class, 'productAttributes'])->name('product-attributes');




Route::middleware('auth:api')->group(function () {

// Users
Route::apiResource('users', 'UsersApiController');




Route::post('filter-product', [App\Http\Controllers\Api\ProductApiController::class, 'filterProduct']);
Route::post('product-filter', [App\Http\Controllers\Api\ProductApiController::class, 'filter'] );
Route::post('category', [App\Http\Controllers\Api\CategoryApiController::class, 'index'] );

Route::post('order-history', [App\Http\Controllers\Api\OrderApiController::class, 'orderHistoryDetail'] );
Route::post('gift-cards', [App\Http\Controllers\Api\GiftCardApiController::class, 'index'] );
Route::post('gift-card-user', [App\Http\Controllers\Api\GiftCardApiController::class, 'store'] );
Route::post('add-order', [App\Http\Controllers\Api\OrderApiController::class, 'store'] );



Route::post('cart-list', [App\Http\Controllers\Api\CartApiController::class, 'index'] );
Route::post('add-cart', [App\Http\Controllers\Api\CartApiController::class, 'store'] );
Route::post('delete-cart', [App\Http\Controllers\Api\CartApiController::class, 'destroy'] );

});
Route::get('/clear-cache', function() {
    // 
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
