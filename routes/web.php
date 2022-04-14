<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportProduct;
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
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\VendorSettingController;
use App\Http\Controllers\admin\GeneralSettingController;
use App\Http\Controllers\admin\SupportCategoryController;
use App\Http\Controllers\admin\WithdrowController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\TestimonialsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\SupportTicketsController;


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
    Route::get('country', [VendorSettingController::class, 'countrylist'])->name('country'); 
    Route::post('fetch-states', [VendorSettingController::class, 'fetchState']);
    Route::post('fetch-cities', [VendorSettingController::class, 'fetchCity']);
    Route::get('vendor-add', [VendorSettingController::class, 'vendoradd']);
    Route::post('vendor-added', [VendorSettingController::class, 'vendoradded']);
    //Product
    Route::resource('product', ProductController::class);
    Route::post('get-attr-value', [ProductController::class,'getAtrValue'])->name('get-attr-value');
    Route::post('get-attr-value-single', [ProductController::class,'getAtrValueSingleSelect'])->name('get-attr-value-single');

    //create variants
    Route::post('create-varient', [ProductController::class,'createVarient'])->name('create-varient');
    Route::post('product-search', [CouponController::class,'productSearch'])->name('product-search');

    //Order
    Route::resource('order', OrderController::class);
    //Pages
    Route::resource('pages', PagesController::class);
    //Mail
    Route::resource('mail', MailController::class);
    //Dashboard
    Route::resource('dashboard', DashboardController::class);

    //testimonials
      Route::resource('testimonials', TestimonialsController::class);
 

      //support category
      Route::resource('support-category', SupportCategoryController::class);

      //support
      Route::resource('support-tickets', SupportTicketsController::class)->name('*','support-tickets');

      //support comment
    Route::post('support-comments',[App\Http\Controllers\admin\SupportTicketsController::class, 'sendComment'])->name('support-comments');


    //ticket close
    Route::post('close-ticket',[App\Http\Controllers\admin\SupportTicketsController::class, 'closeTicket'])->name('close-ticket');

    //Category
    Route::resource('category', CategoryController::class);
    Route::post('category-pagination',[App\Http\Controllers\admin\CategoryController::class, 'pagination'])->name('category-pagination');
    //Attribute
    Route::resource('attribute', AttributeController::class);

    Route::get('add-value/{id}',[App\Http\Controllers\admin\AttributeController::class, 'addvalue']);

    Route::POST('save-value/{id}',[App\Http\Controllers\admin\AttributeController::class, 'saveatrvalue']);

    //Attribute value

    Route::resource('attribute-value', AttributeValueController::class);
    Route::get('attr-value/{id}',[App\Http\Controllers\admin\AttributeValueController::class, 'attrValdata'])->name('attr-value');
    //Gift Card

    Route::resource('gift-card', GiftCardController::class);
    Route::get('card-deatils',[App\Http\Controllers\admin\GiftCardController::class, 'index2'])->name('card-deatils');
    Route::get('gift-card-transaction',[App\Http\Controllers\admin\GiftCardController::class, 'giftcardTransaction'])->name('gift-card-transaction');

    Route::get('transaction-show/{id}',[App\Http\Controllers\admin\GiftCardController::class, 'transactionShow'])->name('transaction-show');



    // Coupon
    Route::resource('coupon', CouponController::class);
    //Brand
    Route::resource('brand', BrandController::class);
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

    Route::post('language',[App\Http\Controllers\SettingsController::class, 'language'])->name('language');

    // Route::post('currency',[App\Http\Controllers\SettingsController::class, 'currency'])->name('currency');

    //Vendor settings
    Route::resource('vendorsettings', VendorSettingController::class);

    Route::get('vendorsetting',[App\Http\Controllers\admin\VendorSettingController::class, 'index2'])->name('vendor-setting');

     Route::post('vendor-setting-update',[App\Http\Controllers\admin\VendorSettingController::class, 'storedata'])->name('vendor-setting-update');

     Route::get('vendorsetting-admin',[App\Http\Controllers\admin\VendorSettingController::class, 'index3'])->name('vendor-setting-admin');
    //Approve & Reject Vendor

     Route::get('vendor-approve/{id}',[App\Http\Controllers\admin\VendorSettingController::class, 'approveVendor'])->name('vendor-approve');

     Route::get('vendor-rejected/{id}',[App\Http\Controllers\admin\VendorSettingController::class, 'rejectVendor'])->name('vendor-rejected');

     //approve product
     Route::get('approve-product/{id}',[App\Http\Controllers\admin\ProductController::class, 'productapprove'])->name('approve-product');
     Route::post('reject-product/{id}',[App\Http\Controllers\admin\ProductController::class, 'rejectapprove'])->name('reject-product');

    //Withdrow Request
    Route::resource('withdrow', WithdrowController::class);

    Route::get('approve-request',[App\Http\Controllers\admin\WithdrowController::class, 'approve'])->name('approve-request');

    Route::get('reject-request',[App\Http\Controllers\admin\WithdrowController::class, 'reject'])->name('reject-request');

    Route::get('vendor-earning-list',[App\Http\Controllers\admin\WithdrowController::class, 'vendorEarninglist'])->name('vendor-earning-list');

    Route::post('req-withdrow',[App\Http\Controllers\admin\WithdrowController::class, 'withdrowreq'])->name('req-withdrow');

   


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
       Route::get('store-cadit',[App\Http\Controllers\admin\UsersController::class, 'storeCradit'])->name('store-cadit');

     Route::get('delivered-orders',[App\Http\Controllers\admin\OrderController::class, 'deliveredorders'])->name('delivered-orders');
     Route::post('chnage-order-status',[App\Http\Controllers\admin\OrderController::class, 'changestatus'])->name('chnage-order-status');

     //customer
     Route::get('customers',[App\Http\Controllers\admin\UsersController::class, 'customer'])->name('customers');

     //import customer

     Route::get('view-customer',[App\Http\Controllers\admin\UsersController::class, 'importView'])->name('view-customer');
    Route::post('import-customer',[App\Http\Controllers\admin\UsersController::class, 'importCustomer'])->name('import-customer'); 


    //cahce clear
    Route::get('cache-clear',[App\Http\Controllers\admin\UsersController::class, 'clearCache'])->name('cache-clear'); 
    Route::get('cookie-cache-clear', function() {
      Artisan::call('cache:clear');
      Artisan::call('optimize');
      Artisan::call('config:clear');
      Artisan::call('route:clear');
      Artisan::call('view:clear');
      return redirect('https://beta.wasilonline.net/dashboard/dashboard/cache-clear');
    
    })->name('cookie-cache-clear');


     //product import

     Route::get('file-import',[App\Http\Controllers\admin\ProductController::class, 'importView'])->name('import-view');
    Route::post('import-product',[App\Http\Controllers\admin\ProductController::class, 'importproduct'])->name('import-product');
    Route::get('export-product',[App\Http\Controllers\admin\ProductController::class,'exportProduct'])->name('export-product');


  //Vendor import

  Route::get('vendor-view',[App\Http\Controllers\admin\VendorSettingController::class, 'importView'])->name('vendor-view');
  Route::post('import-vendor',[App\Http\Controllers\admin\VendorSettingController::class, 'importvendor'])->name('import-vendor');


    Route::get('get-category/{id}', [ProductController::class,'getCategory'])->name('get-category');
    });
    //Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


    route::get('/index2', [UserController::class, 'index2']);

    route::get('/index3', [UserController::class, 'index3']);

    route::get('/index4', [UserController::class, 'index4']);
    route::get('/index5', [UserController::class, 'index5']);

    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clear-cache', function() {
  Artisan::call('cache:clear');
  Artisan::call('optimize');
  Artisan::call('config:clear');
  Artisan::call('route:clear');
  Artisan::call('view:clear');
  return "Cache is cleared";

});