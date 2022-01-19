<?php



use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UserController;

use App\Http\Controllers\admin\UsersController;

use App\Http\Controllers\admin\RolesController;

use App\Http\Controllers\admin\PermissionsController;

use App\Http\Controllers\admin\ProductController;

use App\Http\Controllers\admin\OrderController;

use App\Http\Controllers\admin\PagesController;

use App\Http\Controllers\admin\MailController;

use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\admin\AttributeController;

use App\Http\Controllers\admin\AttributeValueController;

use App\Http\Controllers\admin\GiftCardController;

use App\Http\Controllers\admin\CouponController;

use App\Http\Controllers\admin\HomepageController;

use App\Http\Controllers\admin\TaxController;

use App\Http\Controllers\admin\CurrencyController;

use App\Http\Controllers\admin\ReviewController;

use App\Http\Controllers\admin\SettingsController;

use App\Http\Controllers\admin\MenuController;

use App\Http\Controllers\admin\VendorSettingController;


use App\Http\Controllers\admin\GeneralSettingController;

use App\Http\Controllers\admin\WithdrowController;

use App\Http\Controllers\admin\DashboardController;






/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/

Route::redirect('/', '/login');



Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']], function (){

     Route::get('/', 'HomeController@index')->name('home');

    Route::get('/', function () {

        return view('index');

    });

    //Users

    Route::resource('users', UsersController::class);

    //Roles

    Route::resource('roles', RolesController::class);

    //Permission

    Route::resource('permissions', PermissionsController::class);

    //Product

    Route::resource('product', ProductController::class);
    Route::post('get-attr-value', [ProductController::class,'getAtrValue'])->name('get-attr-value');

    Route::post('get-attr-value-single', [ProductController::class,'getAtrValueSingleSelect'])->name('get-attr-value-single');


    //create variants

    Route::post('create-varient', [ProductController::class,'createVarient'])->name('create-varient');;



    //Order

    Route::resource('order', OrderController::class);

    //Pages

    Route::resource('pages', PagesController::class);

    //Mail

    Route::resource('mail', MailController::class);

    //Dashboard

    Route::resource('dashboard', DashboardController::class);

    //Category

    Route::resource('category', CategoryController::class);
    Route::post('category-pagination',[App\Http\Controllers\admin\CategoryController::class, 'pagination'])->name('category-pagination');
    //Attribute

    Route::resource('attribute', AttributeController::class);
    Route::get('add-value/{id}',[App\Http\Controllers\admin\AttributeController::class, 'addvalue']);
    Route::POST('save-value/{id}',[App\Http\Controllers\admin\AttributeController::class, 'saveatrvalue']);
    //Attribute value

    Route::resource('attribute-value', AttributeValueController::class);

    //Gift Card

    Route::resource('gift-card', GiftCardController::class);
    Route::get('card-deatils',[App\Http\Controllers\admin\GiftCardController::class, 'index2'])->name('card-deatils');
    // Coupon

    Route::resource('coupon', CouponController::class);



    //Tax

    Route::resource('tax', TaxController::class);

     //generalsetting

    Route::resource('general-setting', GeneralSettingController::class)->name('*', 'general-setting');


    // Home Page

    Route::resource('homepage', HomepageController::class);



    //currency 

    Route::resource('currency', CurrencyController::class);



    // settings

      Route::resource('settings', SettingsController::class);



    //Vendor settings

    Route::resource('vendorsettings', VendorSettingController::class);
    Route::get('vendorsetting',[App\Http\Controllers\admin\VendorSettingController::class, 'index2'])->name('vendor-setting');
     Route::post('vendor-setting-update',[App\Http\Controllers\admin\VendorSettingController::class, 'storedata'])->name('vendor-setting-update');
     Route::get('vendorsetting-admin',[App\Http\Controllers\admin\VendorSettingController::class, 'index3'])->name('vendor-setting-admin');

    //Approve & Reject Vendor
     Route::get('vendor-approve/{id}',[App\Http\Controllers\admin\VendorSettingController::class, 'approveVendor'])->name('vendor-approve');
     Route::get('vendor-rejected/{id}',[App\Http\Controllers\admin\VendorSettingController::class, 'rejectVendor'])->name('vendor-rejected');

    //Withdrow Request

    Route::resource('withdrow', WithdrowController::class);
    Route::get('approve-request',[App\Http\Controllers\admin\WithdrowController::class, 'approve'])->name('approve-request');
    Route::get('reject-request',[App\Http\Controllers\admin\WithdrowController::class, 'reject'])->name('reject-request');

     


     //Menus

     Route::resource('menus', MenuController::class);



     // Logs

     Route::get('add-to-log',[App\Http\Controllers\HomeController::class, 'myTestAddToLog'])->name('add-to-log');

     Route::get('logActivity',[App\Http\Controllers\HomeController::class, 'logActivity'])->name('logActivity');

     Route::delete('logsdelete/{id}',[App\Http\Controllers\HomeController::class, 'logsdelete'])->name('logsdelete');

Route::post('get-attr-select',[App\Http\Controllers\admin\ProductController::class, 'getAtrValueSelect'])->name('get-attr-select');

    // reviews

       Route::resource('review', ReviewController::class);



       Route::get('user',[App\Http\Controllers\admin\UsersController::class, 'index2'])->name('user-index');



     //

     Route::get('delivered-orders',[App\Http\Controllers\admin\OrderController::class, 'deliveredorders'])->name('delivered-orders');



  



    Route::get('get-category/{id}', [ProductController::class,'getCategory'])->name('get-category');


    });

    //Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');







    route::get('/index2', [UserController::class, 'index2']);

    route::get('/index3', [UserController::class, 'index3']);

    route::get('/index4', [UserController::class, 'index4']);

    route::get('/index5', [UserController::class, 'index5']);



Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

