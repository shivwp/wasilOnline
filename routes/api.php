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

//social
Route::post('social', [App\Http\Controllers\Api\UserApiController::class, 'social']);


Route::post('products', [App\Http\Controllers\Api\ProductApiController::class, 'index'] );
Route::post('product',  [App\Http\Controllers\Api\ProductApiController::class, 'singleproduct'] );
Route::post('new-product',  [App\Http\Controllers\Api\ProductApiController::class, 'newproduct'] );
Route::post('best-seller-product',  [App\Http\Controllers\Api\ProductApiController::class, 'bestseller'] );
Route::post('search-product', [App\Http\Controllers\Api\ProductApiController::class, 'searchProduct'] );
Route::post('value-of-the-day', [App\Http\Controllers\Api\ProductApiController::class, 'valueOfTheDay'] );
Route::post('top-hundered', [App\Http\Controllers\Api\ProductApiController::class, 'topHunderd'] );
//Route::post('user-locations', [App\Http\Controllers\Api\ProductApiController::class, 'userLocations'] );
Route::post('trending-product',  [App\Http\Controllers\Api\ProductApiController::class, 'trendingProduct'] );
Route::post('feature-product',  [App\Http\Controllers\Api\ProductApiController::class, 'Featureproduct'] );
Route::post('category', [App\Http\Controllers\Api\CategoryApiController::class, 'index'] );
Route::post('currency',  [App\Http\Controllers\Api\CurrencyController::class, 'index'] );
Route::post('menus',  [App\Http\Controllers\Api\MenuController::class, 'index'] );
Route::post('news-latter',  [App\Http\Controllers\Api\NewslatterApiController::class, 'store'] );
Route::post('category-list', [App\Http\Controllers\Api\CategoryApiController::class, 'categorylist'] );
Route::post('orders', [App\Http\Controllers\Api\OrderApiController::class, 'index'] );
Route::post('get-in-touch', [App\Http\Controllers\Api\GetInTouchApiController::class, 'store'] );




Route::post('filters', [App\Http\Controllers\Api\ProductApiController::class, 'allFilters'] );

Route::post('home', [App\Http\Controllers\Api\HomepageApiController::class, 'index'] );

Route::post('testimonials', [App\Http\Controllers\Api\TestimonialsApiController::class, 'index'] );

Route::post('product-attributes',[App\Http\Controllers\Api\ProductApiController::class, 'productAttributes'])->name('product-attributes');




Route::middleware('auth:api')->group(function () {
Route::post('orders', [App\Http\Controllers\Api\OrderApiController::class, 'index'] );
Route::post('my-account', [App\Http\Controllers\Api\UserApiController::class, 'userdetails'] );
Route::post('address', [App\Http\Controllers\Api\UserApiController::class, 'myaddress'] );
// Users
Route::apiResource('users', 'UsersApiController');




Route::post('filter-product', [App\Http\Controllers\Api\ProductApiController::class, 'filterProduct']);
Route::post('product-filter', [App\Http\Controllers\Api\ProductApiController::class, 'filter'] );
Route::post('category', [App\Http\Controllers\Api\CategoryApiController::class, 'index'] );

Route::post('order-history', [App\Http\Controllers\Api\OrderApiController::class, 'orderHistoryDetail'] );
Route::post('gift-cards', [App\Http\Controllers\Api\GiftCardApiController::class, 'index'] );
Route::post('gift-card-user', [App\Http\Controllers\Api\GiftCardApiController::class, 'store'] );
Route::post('add-order', [App\Http\Controllers\Api\OrderApiController::class, 'store'] );
Route::post('my-account', [App\Http\Controllers\Api\UserApiController::class, 'userdetails'] );
Route::post('edit-account', [App\Http\Controllers\Api\UserApiController::class, 'edituserdetails'] );

Route::post('address', [App\Http\Controllers\Api\UserApiController::class, 'myaddress'] );
Route::post('edit-address', [App\Http\Controllers\Api\UserApiController::class, 'editaddresses'] );


Route::post('cart-list', [App\Http\Controllers\Api\CartApiController::class, 'index'] );
Route::post('add-cart', [App\Http\Controllers\Api\CartApiController::class, 'store'] );
Route::post('delete-cart', [App\Http\Controllers\Api\CartApiController::class, 'destroy'] );

Route::post('add-to-wishlist', [App\Http\Controllers\Api\WishlistApiController::class, 'store'] );
Route::post('remove-from-wishlist', [App\Http\Controllers\Api\WishlistApiController::class, 'destroy'] );
Route::post('wishlist', [App\Http\Controllers\Api\WishlistApiController::class, 'index'] );

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
