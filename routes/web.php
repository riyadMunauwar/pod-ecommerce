<?php

use Illuminate\Support\Facades\Route;


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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('admin')->group(function () {

    Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');
    Route::view('/products/create', 'admin.pages.products.create')->name('products.create');
    Route::view('/products', 'admin.pages.products.list')->name('products.list');
    Route::view('/orders', 'admin.pages.orders.list')->name('orders.list');
    Route::view('/orders/new', 'admin.pages.orders.new-order-list')->name('orders.new-list');
    Route::get('/orders/{order}/show', \App\Http\Controllers\Admin\OrderDetailController::class)->name('orders.show');
    Route::get('/orders/{order}/invoice', \App\Http\Controllers\Admin\GenerateInvoiceController::class)->name('orders.invoice');
    Route::view('/categories/create', 'admin.pages.categories.create')->name('categories.create');
    Route::view('/categories', 'admin.pages.categories.list')->name('categories.list');
    Route::view('/brands/create', 'admin.pages.brands.create')->name('brands.create');
    Route::view('/brands', 'admin.pages.brands.list')->name('brands.list');
    Route::view('/suppliers', 'admin.pages.suppliers.create')->name('suppliers.create');
    Route::view('/banners', 'admin.pages.banners.create')->name('banners.create');
    Route::view('/caurosels', 'admin.pages.caurosels.create')->name('caurosels.create');
    Route::view('/guides', 'admin.pages.guides.create')->name('guides.create');
    Route::view('/menus', 'admin.pages.menus.create')->name('menus.create');
    Route::view('/pages', 'admin.pages.custom-pages.create')->name('pages.create');
    Route::view('/footers', 'admin.pages.footers.create')->name('footers.create');
    Route::view('/admins', 'admin.pages.admins.list')->name('admins.list');
    Route::view('/coupons', 'admin.pages.coupons.create')->name('coupons.create');
    Route::view('/customers', 'admin.pages.customers.list')->name('customers.list');
    Route::view('/socials', 'admin.pages.socials.create')->name('socials.create');
    Route::view('/settings/general', 'admin.pages.settings.create')->name('settings.create');
    Route::view('/header', 'admin.pages.header.create')->name('header.create');

    Route::view('/reports/sales', 'admin.pages.reports.sales-report')->name('reports.sales');
    Route::view('/reports/purchases', 'admin.pages.reports.purchases-report')->name('reports.purchases');
    Route::view('/reports/stocks', 'admin.pages.reports.stocks-report')->name('reports.stocks');
    Route::view('/reports/branded-products', 'admin.pages.reports.branded-products-report')->name('reports.branded-products');
    Route::view('/reports/categorized-products', 'admin.pages.reports.categorized-products-report')->name('reports.categorized-products');
    Route::view('/reports/products-view', 'admin.pages.reports.products-view-report')->name('reports.products-view');
    Route::view('/reports/products-search', 'admin.pages.reports.products-search-report')->name('reports.products-search');
    Route::view('/reports/customer-orders', 'admin.pages.reports.customer-orders-report')->name('reports.customer-orders');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('designer')->as('designer.')->group(function () {

    Route::view('/', 'designer.pages.dashboard')->name('dashboard');
    Route::view('/design/create', 'designer.pages.add-design')->name('create');
    Route::view('/products', 'designer.pages.product-list')->name('product-list');

});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('vendor')->as('vendor.')->group(function () {

    Route::view('/', 'vendor.pages.dashboard')->name('dashboard');
    Route::view('/register', 'vendor.pages.register')->name('register');
    Route::view('/login', 'vendor.pages.login')->name('login');
 
});



Route::view('/designer/register', 'designer.pages.register')->name('designer.register');
Route::view('/designer/login', 'designer.pages.login')->name('designer.login');

Route::view('/vendor/register', 'vendor.pages.register')->name('vendor.register');
Route::view('/vendor/login', 'vendor.pages.login')->name('vendor.login');

Route::view('/', 'front.pages.home')->name('home');
Route::view('/checkout', 'front.pages.checkout')->name('checkout');
Route::view('/cart', 'front.pages.cart')->name('cart');
Route::view('/popular', 'front.pages.popular-archieve')->name('popular-archieve');
Route::view('/recent', 'front.pages.recent-archieve')->name('recent-archieve');
Route::view('/p/{slug}/{id}', 'front.pages.product-detail')->name('product-detail');
Route::view('/c/{category_slug}', 'front.pages.category-archieve')->name('category-archieve');
Route::view('/b/{brand_slug}', 'front.pages.brand-archieve')->name('brand-archieve');
Route::view('/{page_slug}', 'front.pages.custom-page')->name('custom-page');
