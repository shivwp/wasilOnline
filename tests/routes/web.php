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

    // Home Page
    Route::resource('homepage', HomepageController::class);

    });
    //Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



route::get('/about', [UserController::class, 'about']);
route::get('/accordion', [UserController::class, 'accordion']);
route::get('/alerts', [UserController::class, 'alerts']);
route::get('/avatarradius', [UserController::class, 'avatarradius']);
route::get('/avatarround', [UserController::class, 'avatarround']);
route::get('/avatarsquare', [UserController::class, 'avatarsquare']);
route::get('/badge', [UserController::class, 'badge']);
route::get('/blog', [UserController::class, 'blog']);
route::get('/breadcrumbs', [UserController::class, 'breadcrumbs']);
route::get('/buttons', [UserController::class, 'buttons']);
route::get('/calendar', [UserController::class, 'calendar']);
route::get('/calendar2', [UserController::class, 'calendar2']);
route::get('/cards', [UserController::class, 'cards']);
route::get('/carousel', [UserController::class, 'carousel']);
route::get('/cart', [UserController::class, 'cart']);
route::get('/chart', [UserController::class, 'chart']);
route::get('/chartchartist', [UserController::class, 'chartchartist']);
route::get('/chartdonut', [UserController::class, 'chartdonut']);
route::get('/chartechart', [UserController::class, 'chartechart']);
route::get('/chartflot', [UserController::class, 'chartflot']);
route::get('/chartline', [UserController::class, 'chartline']);
route::get('/chartmorris', [UserController::class, 'chartmorris']);
route::get('/chartnvd3', [UserController::class, 'chartnvd3']);
route::get('/chartpie', [UserController::class, 'chartpie']);
route::get('/charts', [UserController::class, 'charts']);
route::get('/chat', [UserController::class, 'chat']);
route::get('/colors', [UserController::class, 'colors']);
route::get('/construction', [UserController::class, 'construction']);
route::get('/counters', [UserController::class, 'counters']);
route::get('/cryptocurrencies', [UserController::class, 'cryptocurrencies']);
route::get('/datatable', [UserController::class, 'datatable']);
route::get('/dropdown', [UserController::class, 'dropdown']);
route::get('/editprofile', [UserController::class, 'editprofile']);
route::get('/email', [UserController::class, 'email']);
route::get('/emailview', [UserController::class, 'emailview']);
route::get('/emailservices', [UserController::class, 'emailservices']);
route::get('/empty', [UserController::class, 'empty']);
route::get('/faq', [UserController::class, 'faq']);
route::get('/footers', [UserController::class, 'footers']);
route::get('/forgotpassword', [UserController::class, 'forgotpassword']);
route::get('form', [UserController::class, 'form']);
route::get('/formelements', [UserController::class, 'formelements']);
route::get('/formwizard', [UserController::class, 'formwizard']);
route::get('/gallery', [UserController::class, 'gallery']);
route::get('/headers', [UserController::class, 'headers']);
route::get('/icons01', [UserController::class, 'icons01']);
route::get('/icons02', [UserController::class, 'icons02']);
route::get('/icons03', [UserController::class, 'icons03']);
route::get('/icons04', [UserController::class, 'icons04']);
route::get('/icons05', [UserController::class, 'icons05']);
route::get('/icons06', [UserController::class, 'icons06']);
route::get('/icons07', [UserController::class, 'icons07']);
route::get('/icons08', [UserController::class, 'icons08']);
route::get('/icons09', [UserController::class, 'icons09']);
route::get('/icons10', [UserController::class, 'icons10']);
route::get('/index2', [UserController::class, 'index2']);
route::get('/index3', [UserController::class, 'index3']);
route::get('/index4', [UserController::class, 'index4']);
route::get('/index5', [UserController::class, 'index5']);
route::get('/invoice', [UserController::class, 'invoice']);
route::get('/jumbotron', [UserController::class, 'jumbotron']);
route::get('/list', [UserController::class, 'list']);
route::get('/loaders', [UserController::class, 'loaders']);
route::get('/lockscreen', [UserController::class, 'lockscreen']);
route::get('/login', [UserController::class, 'login']);
route::get('/maps', [UserController::class, 'maps']);
route::get('/mediaobject', [UserController::class, 'mediaobject']);
route::get('/modal', [UserController::class, 'modal']);
route::get('/navigation', [UserController::class, 'navigation']);
route::get('/notify', [UserController::class, 'notify']);
route::get('/pagination', [UserController::class, 'pagination']);
route::get('/panels', [UserController::class, 'panels']);
route::get('/pricing', [UserController::class, 'pricing']);
route::get('/profile', [UserController::class, 'profile']);
route::get('/progress', [UserController::class, 'progress']);
route::get('/rangeslider', [UserController::class, 'rangeslider']);
route::get('/rating', [UserController::class, 'rating']);
route::get('/register', [UserController::class, 'register']);
route::get('/scroll', [UserController::class, 'scroll']);
route::get('/search', [UserController::class, 'search']);
route::get('/services', [UserController::class, 'services']);
route::get('/shop', [UserController::class, 'shop']);
route::get('/shopdescription', [UserController::class, 'shopdescription']);
route::get('/sweetalert', [UserController::class, 'sweetalert']);
route::get('/tables', [UserController::class, 'tables']);
route::get('/tabs', [UserController::class, 'tabs']);
route::get('/tags', [UserController::class, 'tags']);
route::get('/terms', [UserController::class, 'terms']);
route::get('/thumbnails', [UserController::class, 'thumbnails']);
route::get('/timeline', [UserController::class, 'timeline']);
route::get('/tooltipandpopover', [UserController::class, 'tooltipandpopover']);
route::get('/typography', [UserController::class, 'typography']);
route::get('/userslist', [UserController::class, 'userslist']);
route::get('/widgets', [UserController::class, 'widgets']);
route::get('/error400', [UserController::class, 'error400']);
route::get('/error401', [UserController::class, 'error401']);
route::get('/error403', [UserController::class, 'error403']);
route::get('/error404', [UserController::class, 'error404']);
route::get('/error500', [UserController::class, 'error500']);
route::get('/error503', [UserController::class, 'error503']);
route::get('/verticalmenu', [UserController::class, 'verticalmenu']);
route::get('/horizontalmenu', [UserController::class, 'horizontalmenu']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
