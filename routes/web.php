<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;


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
// routes/web.php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Faker\Guesser\Name;


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/products', [ProductController::class, 'showInfo'])->name("adminProducts");
    Route::view('/admin/dashboard', 'admin.dashboard')->name('adminDashboard');
});

Route::get('/change_password', function () {
    return view('change_password');
})->name("change-password");
Route::get('/addByAdmin', [ProductController::class, 'addPage'])->name('addByAdmin');
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/products', [ProductController::class, 'showInfoOnMain']);
Route::post('/updateProduct', [ProductController::class, 'update'])->name('updateProduct');
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('editProduct');

Route::get('/addManufacture', function () {
    return view('admin/add-manufacture');
});
Route::get('/tyrePattern', function () {
    return view('admin/tyre-patteren');
});
Route::get('/adminIndex', function () {
    return view('admin/index');
});

Route::get("/manufacturers", [ProductController::class, 'render'])->name("manufacturers");
Route::get("/manufacturers/{manufacturer}", [ProductController::class, 'category'])->name("manufacturer");
Route::post('/dashboard', [AdminController::class, 'login'])->name('dashboard');
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/adminOrders', function () {
    return view('admin/orders');
});
Route::get('/editUser', function () {
    return view('admin/edit-user');
})->name('editUser');
Route::get('/adminAddProduct', function () {
    return view('admin/add-product');
})->name('adminAddProducts');
Route::delete('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/insert', [RegisterController::class, 'insert']);
Route::get('/render', [ProductController::class, 'render']);
Route::post('/add', [ProductController::class, 'add'])->name('add');
Route::post('/update', [ProductController::class, 'update'])->name('update');
Route::post('/verify', [RegisterController::class, 'verify']);
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');



// PAGES VIEWS ROUTES
Route::view("/", "index")->name("home");
Route::view("/login", "login")->name("login");
Route::view("/register", "register")->name("register");
Route::view("/about", "about")->name("about");
Route::view("/blog-detail", "blog-detail")->name("blog-detail");
Route::view("/blogs", "blogs")->name("blogs");
Route::view("/booking", "booking")->name("booking");
Route::view("/cart", "cart")->name("cart");
Route::view("/checkout", "checkout")->name("checkout");
Route::view("/contact", "contact")->name("contact");
Route::view("/edit-profile", "edit-profile")->name("edit-profile");
Route::view("/forget-password", "forget-password")->name("forget-password");
Route::view("/gallery", "gallery")->name("gallery");
// Route::view("/manufacturers", "manufacturers")->name("manufacturers");
Route::view("/orders", "orders")->name("orders");
Route::view("/search", "search")->name("search");
Route::view("/services", "services")->name("services");
Route::view("/tyre-pattren", "tyre-pattren")->name("tyre-pattren");




// ADMIN ROUTES

Route::view("admin/dashboard", "admin.dashboard")->name("adminDashboard");
// Route::view("admin/products", "admin.products")->name("adminProducts");
Route::view("admin/add-product", "admin.add-product")->name("adminAddProduct");
Route::view("admin/edit-product", "admin.edit-product")->name("adminEditProduct");
Route::view("admin/manufacturers", "admin.manufacturers")->name("adminManufacturers");
Route::view("admin/add-manufacturer", "admin.add-manufacture")->name("adminAddManufacturers");
Route::view("admin/edit-manufacturer", "admin.edit-manufacture")->name("adminEditManufacturers");
Route::view("admin/tyre-pattren", "admin.tyre-patteren")->name("adminTyrepattren");
Route::view("admin/add-pattren", "admin.add-patteren")->name("adminAddTyrepattren");
Route::view("admin/edit-pattren", "admin.edit-patteren")->name("adminEditTyrepattren");
Route::view("admin/users", "admin.users")->name("adminUsers");
Route::view("admin/add-users", "admin.add-user")->name("adminAddUsers");
Route::view("admin/edit-users", "admin.edit-user")->name("adminEditUsers");
Route::view("admin/orders", "admin.orders")->name("adminOrder");

Route::prefix("admin")->group(function () {
    Route::view("/", "admin.index");
    // Route::view("/products", "admin.products")->name("products");
    Route::view("/tyrePattern", "admin.tyre-Patteren")->name("tyrePattern");
});
