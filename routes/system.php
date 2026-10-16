<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
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

Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/dashboard', function () {
        return view('system.pages.dashboard');
    });
    Route::get('/profile', function () {
        return view('system.pages.profile');
    });
    Route::get('/admin_add', function () {
        return view('system.pages.admin_add');
    });
    Route::get('/admins_view', function () {
        return view('system.pages.admins_view');
    });
    Route::get('/role_add', function () {
        return view('system.pages.role_add');
    });
    Route::get('/roles_view', function () {
        return view('system.pages.roles_view');
    });
    Route::get('/user_add', function () {
        return view('system.pages.user_add');
    });
    Route::get('/users_all', function () {
        return view('system.pages.users_all');
    });
    Route::get('/users_edit', function () {
        return view('system.pages.users_edit');
    });
    Route::get('/orders_all', function () {
        return view('system.pages.orders');
    });
    Route::get('/orders_pending', function () {
        return view('system.pages.orders_pending');
    });
    Route::get('/tracking_all', function () {
        return view('system.pages.tracking_all');
    });
    Route::get('/orders', function (
    ) {
        return view('system.pages.orders');
    });
    Route::get('/order-details', function (
        ) {
            return view('system.pages.order-details');
        });
});

Route::get('/login', function () {
    return view('system.auth.login');
});

// Users Routes
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

/*
Route::get('/analytics', function () {
    return view('/pages/analytics');
});

Route::get('/email/inbox', function () {
    return view('/pages/email-inbox');
});

Route::get('/email/compose', function () {
    return view('/pages/email-compose');
});

Route::get('/email/detail', function () {
    return view('/pages/email-detail');
});

Route::get('/widgets', function () {
    return view('/pages/widgets');
});

Route::get('/pos/customer-order', function () {
    return view('/pages/pos-customer-order');
});

Route::get('/pos/kitchen-order', function () {
    return view('/pages/pos-kitchen-order');
});

Route::get('/pos/counter-checkout', function () {
    return view('/pages/pos-counter-checkout');
});

Route::get('/pos/table-booking', function () {
    return view('/pages/pos-table-booking');
});

Route::get('/pos/menu-stock', function () {
    return view('/pages/pos-menu-stock');
});

Route::get('/ui/bootstrap', function () {
    return view('/pages/ui-bootstrap');
});

Route::get('/ui/buttons', function () {
    return view('/pages/ui-buttons');
});

Route::get('/ui/card', function () {
    return view('/pages/ui-card');
});

Route::get('/ui/icons', function () {
    return view('/pages/ui-icons');
});

Route::get('/ui/modal-notifications', function () {
    return view('/pages/ui-modal-notifications');
});

Route::get('/ui/typography', function () {
    return view('/pages/ui-typography');
});

Route::get('/ui/tabs-accordions', function () {
    return view('/pages/ui-tabs-accordions');
});

Route::get('/form/elements', function () {
    return view('/pages/form-elements');
});

Route::get('/form/plugins', function () {
    return view('/pages/form-plugins');
});

Route::get('/form/wizards', function () {
    return view('/pages/form-wizards');
});

Route::get('/table/elements', function () {
    return view('/pages/table-elements');
});

Route::get('/table/plugins', function () {
    return view('/pages/table-plugins');
});

Route::get('/chart/chart-js', function () {
    return view('/pages/chart-js');
});

Route::get('/chart/chart-apex', function () {
    return view('/pages/chart-apex');
});

Route::get('/map', function () {
    return view('/pages/map');
});

Route::get('/layout/starter-page', function () {
    return view('/pages/layout-starter-page');
});

Route::get('/layout/fixed-footer', function () {
    return view('/pages/layout-fixed-footer');
});

Route::get('/layout/full-height', function () {
    return view('/pages/layout-full-height');
});

Route::get('/layout/full-width', function () {
    return view('/pages/layout-full-width');
});

Route::get('/layout/boxed-layout', function () {
    return view('/pages/layout-boxed-layout');
});

Route::get('/layout/collapsed-sidebar', function () {
    return view('/pages/layout-collapsed-sidebar');
});

Route::get('/layout/top-nav', function () {
    return view('/pages/layout-top-nav');
});

Route::get('/layout/mixed-nav', function () {
    return view('/pages/layout-mixed-nav');
});

Route::get('/layout/mixed-nav-boxed-layout', function () {
    return view('/pages/layout-mixed-nav-boxed-layout');
});

Route::get('/page/scrum-board', function () {
    return view('/pages/page-scrum-board');
});

Route::get('/page/products', function () {
    return view('/pages/page-products');
});

Route::get('/page/product/details', function () {
    return view('/pages/page-product-details');
});

Route::get('/page/orders', function () {
    return view('/pages/page-orders');
});

Route::get('/page/order/details', function () {
    return view('/pages/page-order-details');
});

Route::get('/page/gallery', function () {
    return view('/pages/page-gallery');
});

Route::get('/page/search-results', function () {
    return view('/pages/page-search-results');
});

Route::get('/page/coming-soon', function () {
    return view('/pages/page-coming-soon');
});

Route::get('/page/error', function () {
    return view('/pages/page-error');
});

Route::get('/page/login', function () {
    return view('/pages/page-login');
});

Route::get('/page/register', function () {
    return view('/pages/page-register');
});

Route::get('/page/messenger', function () {
    return view('/pages/page-messenger');
});

Route::get('/page/data-management', function () {
    return view('/pages/page-data-management');
});



Route::get('/calendar', function () {
    return view('/pages/calendar');
});

Route::get('/settings', function () {
    return view('/pages/settings');
});

Route::get('/helper', function () {
    return view('/pages/helper');
});
*/
