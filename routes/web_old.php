<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShipmentController;


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

Auth::routes();

 /*
    --------------------------------
        SET LOCALE ON THE CLICK
    --------------------------------
*/


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
Route::middleware(['auth', 'user-access:user'])->group(function () {
Route::get('/my-account', [HomeController::class, 'my_account'])->name('user.account_panel');

Route::get('/my-addresses', [HomeController::class, 'my_addresses'])->name('my_addresses');

Route::post('/shipments/{shipment}/trackings', [ShipmentController::class, 'addTracking']);


});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});




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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    return view('website.index');
});
// ----------------------------------------------

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect('/' . $locale);
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
