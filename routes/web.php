<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VerseController;
use App\Http\Controllers\PsalmsController;
use App\Http\Controllers\ProverbController;
use App\Http\Controllers\PromisesController;
use App\Models\User;

Route::get('/', function () {

    // User::factory()->create([
    //     'name' => 'Admin User',
    //     'email' => 'admin@amwj.com',
    //     'password' => 'password',
    //     'role' => 'Admin',
    // ]);
    return view('welcome');
});

Route::get('cache-clear', function () {
    Artisan::call('optimize:clear');
    request()->session()->flash('success', 'Successfully cache cleared.');
    return redirect()->back();
})->name('cache.clear');
Auth::routes(['register' => false]);

// routes/web.php
Route::get('/signup-success', function () {

    return view('frontend.layouts.success');
})->name('signup.success');

Route::get('/signup-error', function () {
    
    return view('frontend.layouts.error');
})->name('signup.error');

Route::get('user/login', [FrontendController::class, 'login'])->name('login.form');

// Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('storage-link',[AdminController::class,'storageLink'])->name('storage.link');

Route::get('/verseoftheday', [HomeController::class, 'verseoftheday']);

Route::get('/psalmoftheday', [HomeController::class, 'psalmoftheday']);

Route::get('/proverboftheday', [HomeController::class, 'proverboftheday']);

Route::get('/promiseoftheday', [HomeController::class, 'promiseoftheday']);

Route::get('user/register', [FrontendController::class, 'register'])->name('register.form');

Route::post('user/register', [FrontendController::class, 'registerSubmit'])->name('register.submit');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    // user route
    Route::resource('users', UsersController::class);

    Route::resource('verses', VerseController::class);

    Route::resource('psalm', PsalmsController::class);

    Route::resource('proverbs', ProverbController::class);

    Route::resource('promises', PromisesController::class);
    // Banner
    Route::resource('banner', 'BannerController');
    // Brand
    Route::resource('brand', 'BrandController');
    // Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin-profile');
    Route::post('/profile/{id}', [AdminController::class, 'profileUpdate'])->name('profile-update');
    // Category
    Route::resource('/category', 'CategoryController');
    // Product
    Route::resource('/product', 'ProductController');
    // Ajax for sub category
    Route::post('/category/{id}/child', 'CategoryController@getChildByParent');
    // POST category
    Route::resource('/post-category', 'PostCategoryController');
    // Post tag
    Route::resource('/post-tag', 'PostTagController');
    // Post
    Route::resource('/post', 'PostController');
    // Message
    Route::resource('/message', 'MessageController');
    Route::get('/message/five', [MessageController::class, 'messageFive'])->name('messages.five');

    // Order
    Route::resource('/order', 'OrderController');
    // Shipping
    Route::resource('/shipping', 'ShippingController');
    // Coupon
    Route::resource('/coupon', 'CouponController');
    // Settings
    Route::get('settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('setting/update', [AdminController::class, 'settingsUpdate'])->name('settings.update');

    // Notification
    Route::get('/notification/{id}', [NotificationController::class, 'show'])->name('admin.notification');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('all.notification');
    Route::delete('/notification/{id}', [NotificationController::class, 'delete'])->name('notification.delete');
    // Password Change
    Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password.form');
    Route::post('change-password', [AdminController::class, 'changPasswordStore'])->name('change.password');
});