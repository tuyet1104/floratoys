<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\{AdminController, ProductController, DanhmucController, OrderController, CustomerController};

use App\Http\Controllers\{
    HomeController,
    AuthController,
    OrderViewController,
    CartController
};

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

//Frontend
Route::get('/', [HomeController::class, 'index']);

Route::get('/sanpham/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/All', [HomeController::class, 'viewAll'])->name('viewAll');
Route::get('/tintuc', [HomeController::class, 'services'])->name('services');
Route::get('/danhmuc', [HomeController::class, 'danhmuc'])->name('danhmuc');

//cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('add-go-to-cart/{id}', [CartController::class, 'addGoToCart'])->name('add_go_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/dathang', [CartController::class, 'dathang'])->name('dathang');
Route::post('/vnpay', [CartController::class, 'vnpay'])->name('vnpay');
Route::get('/thongbaodathang', [CartController::class, 'thongbaodathang'])->name('thongbaodathang');

//order
Route::get('/donhang', [OrderViewController::class, 'donhang']);

Route::prefix('/')->middleware('orderview')->group(function () {
    Route::get('/donhang/edit/{id}', [OrderViewController::class, 'edit'])->name('donhang.edit');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');



//admin
Route::prefix('/')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/signinDashboard', [AdminController::class, 'signin_dashboard']);
});


Route::prefix('/')->middleware('admin.login')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin_logout', [AdminController::class, 'admin_logout']);

    Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/admin/product/search', [AdminController::class, 'search'])->name('adminSearch');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/admin/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/admin/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/admin/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/admin/danhmuc', [DanhmucController::class, 'index'])->name('danhmuc.index');
    Route::get('/admin/danhmuc/create', [DanhmucController::class, 'create'])->name('danhmuc.create');
    Route::post('/admin/danhmuc', [DanhmucController::class, 'store'])->name('danhmuc.store');
    Route::get('/admin/danhmuc/edit/{danhmuc}', [DanhmucController::class, 'edit'])->name('danhmuc.edit');
    Route::put('/admin/danhmuc/update/{danhmuc}', [DanhmucController::class, 'update'])->name('danhmuc.update');
    Route::delete('/admin/danhmuc/{danhmuc}/destroy', [DanhmucController::class, 'destroy'])->name('danhmuc.destroy');

    // Tìm kiếm danh mục
    Route::get('admin/danhmucs/search', [AdminController::class, 'searchDanhmuc'])->name('danhmucs.search');

    Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/admin/orders/edit/{orders}', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/admin/orders/update/{orders}', [OrderController::class, 'update'])->name('orders.update');
    Route::get('admin/orders/search', [AdminController::class, 'searchOrders'])->name('orders.search');


    //từ chỗ ni
    Route::get('/admin/customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/admin/customer/edit/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/admin/customer/update/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    //deletedelete
    Route::delete('/admin/customer/{id_kh}', [AdminController::class, 'destroy'])->name('customer.destroy');
    Route::delete('/admin/customer/{id_kh}', [CustomerController::class, 'destroy'])->name('customer.destroy');

    Route::prefix('/admin')->middleware('admin.login')->group(function () {
        // Route hiển thị danh sách khách hàng
        Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
        Route::put('/admin/customer/update/{customer}', [CustomerController::class, 'update'])->name('customer.update');

        //search
    });
    Route::get('admin/customers/search', [AdminController::class, 'searchCustomer'])->name('customers.search');
    Route::get('/admin/customers', [CustomerController::class, 'index'])->name('customers.index');
});

//footer

Route::get('/he-thong-cua-hang', function () {
    return view('pages.hethongcuahang');
});
Route::get('/huong-dan-mua-hang', function () {
    return view('pages.huongdanmuahang');
});
Route::get('/huong-dan-giao-nhan', function () {
    return view('pages.huongdangiaonhan');
});
Route::get('/huong-dan-thanh-toan', function () {
    return view('pages.huongdanthanhtoan');
});
Route::get('/dieu-khoan-dich-vu', function () {
    return view('pages.dieukhoandichvu');
});
Route::get('/chinh-sach-bao-mat', function () {
    return view('pages.chinhsachbaomat');
});
Route::get('/chinh-sach-van-chuyen', function () {
    return view('pages.chinhsachvanchuyen');
});
Route::get('/chinh-sach-doi-tra', function () {
    return view('pages.chinhsachdoitra');
});
Route::get('/quy-dinh-su-dung', function () {
    return view('pages.quydinhsudung');
});
