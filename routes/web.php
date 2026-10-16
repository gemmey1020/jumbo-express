<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth::routes();

 /*
    --------------------------------
        SET LOCALE ON THE CLICK
    --------------------------------
*/

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    $back_url =url()->previous();
$url_arr = explode('/', $back_url);
$count = count($url_arr);
    $back_identifier = $url_arr[$count - 1];
    // dd($back_identifier  , $count , $url_arr ,$back_url);
    $lastChar = substr(request()->headers->get('referer'), -1);
// dd($lastChar);


// dd($back_identifier , $count , $url_arr) ;

if($back_identifier == "" || $count < 5 )
{
    return redirect( $locale .'/' ) ;
}
    return redirect( $locale .'/' . $back_identifier);
});

// Route::group(
//     ['prefix' => '/{lang}/', 'where' => ['lang' => $languageList]], function () {
//     $optionalLanguageRoutes;
// );

Route::group(['prefix' => '{locale?}', 'middleware' => 'locale', 'where' => ['locale' => "en|ar"] ], function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
 session()->put('locale', $locale);



    }else{
        $locale = config('app.locale');
        app()->setLocale($locale);
    }
    Route::get('/cart', function () {
            return view('website.users.cart');
        });

        Route::get('/checkout', function () {
            return view('website.users.checkout');
        });
        Route::get('/checkout_2', function () {
            return view('website.users.checkout_2');
        });
        Route::get('/checkout_3', function () {
            return view('website.users.checkout_3');
        });


        // Route::get('{any}', [PageController::class, 'index'])->name('index');
        Route::get('/', [PageController::class, 'index'])->name('index');
        Route::get('about_us', [PageController::class, 'about_us'])->name('about_us');
        Route::get('contact_us', [PageController::class, 'contact_us'])->name('contact_us');
        Route::get('faq', [PageController::class, 'faq_page'])->name('faq_page');
        Route::get('forbusiness', [PageController::class, 'forbusiness'])->name('forbusiness');
        Route::get('tracking', [PageController::class, 'tracking'])->name('tracking');
        Route::get('termspolicy', [PageController::class, 'termspolicy'])->name('termspolicy');
        // Route::get('/welcome', function () {
        //     return view('welcome');
        // });
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // shpment section

        Route::get('/get_create_shipment', [ShipmentController::class, 'get_create_shipment'])->name('shipments.get_create')->middleware('auth:sanctum');


        Route::post('/shipments', [ShipmentController::class, 'create'])->name('shipments.create')->middleware('auth:sanctum');
        Route::get('/shipments/{id}', [ShipmentController::class, 'show'])->name('shipments.show')->middleware('auth:sanctum');
        Route::get('/shipments/{id}/tracking', [TrackingController::class, 'track'])->name('tracking.track')->middleware('auth:sanctum');



        Route::get('/get_edit_shipments/{id}', [ShipmentController::class, 'get_edit'])->name('shipments.edit')->middleware('auth:sanctum');
        Route::get('/destroy_shipments/{id}', [ShipmentController::class, 'destroy'])->name('shipments.destroy')->middleware('auth:sanctum');

        // Address management routes
        Route::post('/addresses', [AddressController::class, 'addAddress'])->name('addresses.add')->middleware('auth:sanctum');


        Route::post('/addresses/{id}', [AddressController::class, 'editAddress'])->name('addresses.edit')->middleware('auth:sanctum');
        Route::get('/delete_addresses/{id}', [AddressController::class, 'deleteAddress'])->name('addresses.delete')->middleware('auth:sanctum');


        Route::middleware(['auth', 'user-access:user'])->group(function () {
            Route::get('/my-account', [HomeController::class, 'my_account'])->name('user.account_panel');

            Route::get('/my-addresses', [AddressController::class, 'my_addresses'])->name('my_addresses');

            Route::post('/shipments/{shipment}/trackings', [ShipmentController::class, 'addTracking']);

            Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
            Route::get('/cart/checkout', [CartController::class, 'cart_checkout'])->name('cart.checkout');
            Route::get('/cart/invoice', [CartController::class, 'cart_invoice'])->name('cart.cart_invoice');


            Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
            Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
            Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

            Route::get('/cart/remove_all', [CartController::class, 'remove_all'])->name('cart.clear_all');


            });

            // here we  go with the main eroot of accessibilty to multi usage function
            Route::get('/addresses/{id}', [AddressController::class, 'get_edit_address'])->name('addresses.get_edit')->middleware('auth:sanctum');



            Auth::routes();
});

 /*
    --------------------------------
      - END SET LOCALE ON THE CLICK -
    --------------------------------
*/

/*
    -------------------------------------
        -All Normal Users Routes List -
    -------------------------------------

*/

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});



// Payment routes
// Route::post('/payments', [PaymentController::class, 'processPayment'])->name('payments.process')->middleware('auth:sanctum');
// Route::post('/payments/refund', [PaymentController::class, 'refund'])->name('payments.refund')->middleware('auth:sanctum');



// shpment section
// Route::post('/shipments', [ShipmentController::class, 'create'])->name('shipments.create')->middleware('auth:sanctum');
// Route::get('/shipments/{id}', [ShipmentController::class, 'show'])->name('shipments.show')->middleware('auth:sanctum');
// Route::get('/shipments/{id}/tracking', [TrackingController::class, 'track'])->name('tracking.track')->middleware('auth:sanctum');

// // Address management routes
// Route::post('/addresses', [AddressController::class, 'addAddress'])->name('addresses.add')->middleware('auth:sanctum');
// Route::put('/addresses/{id}', [AddressController::class, 'editAddress'])->name('addresses.edit')->middleware('auth:sanctum');
// Route::delete('/addresses/{id}', [AddressController::class, 'deleteAddress'])->name('addresses.delete')->middleware('auth:sanctum');

// Payment routes
// Route::post('/payments', [PaymentController::class, 'processPayment'])->name('payments.process')->middleware('auth:sanctum');
// Route::post('/payments/refund', [PaymentController::class, 'refund'])->name('payments.refund')->middleware('auth:sanctum');




// Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('user.logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
