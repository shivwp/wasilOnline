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



//vendor register  

Route::post('vendor-register', [App\Http\Controllers\Api\UserApiController::class, 'vendorregister']);

Route::post('vendor-login', [App\Http\Controllers\Api\UserApiController::class, 'vendorlogin']);
Route::post('shipping-methods', [App\Http\Controllers\Api\ShippingApiController::class, 'index'] ); 
Route::post('payment-methods', [App\Http\Controllers\Api\ShippingApiController::class, 'paymentMethod'] ); 



Route::post('/userforgot', [App\Http\Controllers\Api\UserApiController::class, 'userforgot']);

Route::post('/userresetpassword', [App\Http\Controllers\Api\UserApiController::class, 'userresetpassword']);



//social

Route::post('social', [App\Http\Controllers\Api\UserApiController::class, 'social']);

Route::post('order-return', [App\Http\Controllers\Api\OrderApiController::class, 'return'] );


Route::post('products', [App\Http\Controllers\Api\ProductApiController::class, 'index'] );

Route::post('product',  [App\Http\Controllers\Api\ProductApiController::class, 'singleproduct'] );

Route::post('new-product',  [App\Http\Controllers\Api\ProductApiController::class, 'newproduct'] );

Route::post('related-product',  [App\Http\Controllers\Api\ProductApiController::class, 'relatedproduct'] );

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

Route::post('page-data', [App\Http\Controllers\Api\PageApiController::class, 'index'] );

Route::post('site-setting', [App\Http\Controllers\Api\SettingApiController::class, 'index'] );

Route::post('stores', [App\Http\Controllers\Api\StoreApiController::class, 'index'] );

Route::post('single-store', [App\Http\Controllers\Api\StoreApiController::class, 'singlestore'] );

Route::post('single-store', [App\Http\Controllers\Api\StoreApiController::class, 'singlestore'] );

Route::post('single-store-category', [App\Http\Controllers\Api\StoreApiController::class, 'singlestorecategory'] );
Route::post('single-store-category-product', [App\Http\Controllers\Api\StoreApiController::class, 'singlestorecategoryproduct'] );

Route::post('get-in-touch', [App\Http\Controllers\Api\GetInTouchApiController::class, 'store'] );

Route::post('review-list', [App\Http\Controllers\Api\UserApiController::class, 'reviewlist'] );

Route::post('dabit-add-to-cart', [App\Http\Controllers\Api\CartApiController::class, 'dabitaddtocart'] );

Route::post('feedback-list', [App\Http\Controllers\Api\ProductApiController::class, 'feedbacklist'] );

//user location

Route::post('location', [App\Http\Controllers\Api\UserLocationApiController::class, 'index'] );

Route::post('filters', [App\Http\Controllers\Api\ProductApiController::class, 'allFilters'] );

Route::post('home', [App\Http\Controllers\Api\HomepageApiController::class, 'index'] );

Route::post('testimonials', [App\Http\Controllers\Api\TestimonialsApiController::class, 'index'] );

Route::post('product-attributes',[App\Http\Controllers\Api\ProductApiController::class, 'productAttributes'])->name('product-attributes');

Route::post('gift-cards', [App\Http\Controllers\Api\GiftCardApiController::class, 'index'] );

Route::post('all-countries', [App\Http\Controllers\Api\CountryStateCityApiController::class, 'allCountries'] );
Route::post('all-states', [App\Http\Controllers\Api\CountryStateCityApiController::class, 'allStates'] );
Route::post('all-cities', [App\Http\Controllers\Api\CountryStateCityApiController::class, 'allCities'] );
//brand
Route::post('brands', [App\Http\Controllers\Api\ProductApiController::class, 'brands'] );



Route::middleware('auth:api')->group(function () {

    Route::post('orders', [App\Http\Controllers\Api\OrderApiController::class, 'index'] );
    Route::post('coupons', [App\Http\Controllers\Api\CouponApiController::class, 'index'] );


    Route::post('order-track', [App\Http\Controllers\Api\OrderApiController::class, 'orderTracking'] );
    Route::post('order-cancel', [App\Http\Controllers\Api\OrderApiController::class, 'cancelOrder'] );

    Route::post('my-account', [App\Http\Controllers\Api\UserApiController::class, 'userdetails'] );

    Route::post('address', [App\Http\Controllers\Api\UserApiController::class, 'myaddress'] );

    Route::post('delete-address', [App\Http\Controllers\Api\UserApiController::class, 'deleteaddresses'] );

    

    // Users
    Route::apiResource('users', 'UsersApiController');

    //ticket-category
    Route::post('ticket-category', [App\Http\Controllers\Api\SupportTicketApiController::class, 'index'] );

    //ticket-generate

    Route::post('ticket-generate', [App\Http\Controllers\Api\SupportTicketApiController::class, 'create'] );


    Route::post('all-tickets', [App\Http\Controllers\Api\SupportTicketApiController::class, 'allTickets'] );

    Route::post('ticket-comment', [App\Http\Controllers\Api\SupportTicketApiController::class, 'ticketComment'] );

    Route::post('user-order', [App\Http\Controllers\Api\SupportTicketApiController::class, 'userOrder'] );



    Route::post('filter-product', [App\Http\Controllers\Api\ProductApiController::class, 'filterProduct']);

    Route::post('product-filter', [App\Http\Controllers\Api\ProductApiController::class, 'filter'] );

    // Route::post('category', [App\Http\Controllers\Api\CategoryApiController::class, 'index'] );

    Route::post('stripe-test', [App\Http\Controllers\Api\OrderApiController::class, 'stripeDemo'] );

    Route::post('all-cards', [App\Http\Controllers\Api\StripeCardsController::class, 'allCardsList'] );

    Route::post('add-card', [App\Http\Controllers\Api\StripeCardsController::class, 'addCard'] );
    Route::post('delete-card', [App\Http\Controllers\Api\StripeCardsController::class, 'deleteCard'] );



    Route::post('order-history', [App\Http\Controllers\Api\OrderApiController::class, 'orderHistoryDetail'] );



    Route::post('wallet-transaction-gift', [App\Http\Controllers\Api\GiftCardApiController::class, 'index2'] );

    Route::post('gift-card-user', [App\Http\Controllers\Api\GiftCardApiController::class, 'store'] );

    Route::post('wallet-transaction', [App\Http\Controllers\Api\GiftCardApiController::class, 'index2'] );

    Route::post('add-order', [App\Http\Controllers\Api\OrderApiController::class, 'store'] );

    Route::post('my-account', [App\Http\Controllers\Api\UserApiController::class, 'userdetails'] );

    Route::post('edit-account', [App\Http\Controllers\Api\UserApiController::class, 'edituserdetails'] );

    //feedback
    Route::post('feedback', [App\Http\Controllers\Api\ProductApiController::class, 'feedbacksave'] );

    //review

    Route::post('review', [App\Http\Controllers\Api\UserApiController::class, 'review'] );

    Route::post('address', [App\Http\Controllers\Api\UserApiController::class, 'myaddress'] );

    Route::post('edit-address', [App\Http\Controllers\Api\UserApiController::class, 'editaddresses'] );

    Route::post('cart-list', [App\Http\Controllers\Api\CartApiController::class, 'index'] );

    Route::post('add-cart', [App\Http\Controllers\Api\CartApiController::class, 'store'] );

    Route::post('qty-update', [App\Http\Controllers\Api\CartApiController::class, 'qtyupdate'] );

    Route::post('delete-cart', [App\Http\Controllers\Api\CartApiController::class, 'destroy'] );

    Route::post('add-wallet-amount', [App\Http\Controllers\Api\UserApiController::class, 'addWalletAmounty'] );

    Route::post('add-to-wishlist', [App\Http\Controllers\Api\WishlistApiController::class, 'store'] );

    Route::post('remove-from-wishlist', [App\Http\Controllers\Api\WishlistApiController::class, 'destroy'] );

    Route::post('wishlist', [App\Http\Controllers\Api\WishlistApiController::class, 'index'] );

    Route::post('create-ticket', [App\Http\Controllers\Api\SupportTicketsController::class, 'createTicket'])->name('create-ticket');
    
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

