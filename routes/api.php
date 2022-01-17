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




Route::middleware('auth:api')->group(function () {

// Users
Route::apiResource('users', 'UsersApiController');


Route::post('products', [App\Http\Controllers\Api\ProductApiController::class, 'index'] );
Route::post('product',  [App\Http\Controllers\Api\ProductApiController::class, 'singleproduct'] );
Route::post('filters', [App\Http\Controllers\Api\ProductApiController::class, 'allFilters'] );
Route::post('filter-product', [App\Http\Controllers\Api\ProductApiController::class, 'filterProduct']);
Route::post('product-filter', [App\Http\Controllers\Api\ProductApiController::class, 'filter'] );
Route::post('category', [App\Http\Controllers\Api\CategoryApiController::class, 'index'] );

Route::post('order-history', [App\Http\Controllers\Api\OrderApiController::class, 'orderHistoryDetail'] );
Route::post('gift-cards', [App\Http\Controllers\Api\GiftCardApiController::class, 'index'] );
Route::post('gift-card-user', [App\Http\Controllers\Api\GiftCardApiController::class, 'store'] );
Route::post('add-order', [App\Http\Controllers\Api\OrderApiController::class, 'store'] );


Route::post('home', [App\Http\Controllers\Api\HomepageApiController::class, 'index'] );
Route::get('cart-list', [App\Http\Controllers\Api\CartApiController::class, 'index'] );
Route::post('add-cart', [App\Http\Controllers\Api\CartApiController::class, 'store'] );
Route::post('delete-cart', [App\Http\Controllers\Api\CartApiController::class, 'destroy'] );

});
