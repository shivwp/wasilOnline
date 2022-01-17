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
    //create variants
    Route::post('create-varient', [ProductController::class,'createVarient'])->name('create-varient');;

    //Order
    Route::resource('order', OrderController::class);
    //Pages
    Route::resource('pages', PagesController::class);
    //Mail
    Route::resource('mail', MailController::class);
    //Category
    Route::resource('category', CategoryController::class);
    //Attribute
    Route::resource('attribute', AttributeController::class);
    //Attribute value
    Route::resource('attribute-value', AttributeValueController::class);
    //Gift Card
    Route::resource('gift-card', GiftCardController::class);
    // Coupon
    Route::resource('coupon', CouponController::class);

    //Tax
    Route::resource('tax', TaxController::class);

    // Home Page
    Route::resource('homepage', HomepageController::class);

    //currency 
    Route::resource('currency', CurrencyController::class);

    // settings
      Route::resource('settings', SettingsController::class);

    //Vendor settings
    Route::resource('vendorsettings', VendorSettingController::class);

     //Menus
     Route::resource('menus', MenuController::class);

     // Logs
     Route::get('add-to-log',[App\Http\Controllers\HomeController::class, 'myTestAddToLog'])->name('add-to-log');
     Route::get('logActivity',[App\Http\Controllers\HomeController::class, 'logActivity'])->name('logActivity');
     Route::delete('logsdelete/{id}',[App\Http\Controllers\HomeController::class, 'logsdelete'])->name('logsdelete');

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
