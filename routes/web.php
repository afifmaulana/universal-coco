<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TitleSectionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layouts.frontend.app');
// });

Route::get('/admin', function () {
    return view('layouts.admin.app');
});

Route::middleware('visitor')->group(function () {
    Route::get('/', [FrontendController::class, 'index']);
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('about-us')->group(function () {
        Route::get('edit', [AboutUsController::class, 'edit'])->name('about-us.edit');
        Route::patch('edit', [AboutUsController::class, 'update'])->name('about-us.update');
    });

    Route::prefix('features')->group(function () {
        Route::get('/', [FeatureController::class, 'index'])->name('feature.index');
        Route::get('/create', [FeatureController::class, 'create'])->name('feature.create');
        Route::post('/create', [FeatureController::class, 'store'])->name('feature.store');
        Route::get('/{id}/edit', [FeatureController::class, 'edit'])->name('feature.edit');
        Route::patch('/{id}/edit', [FeatureController::class, 'update'])->name('feature.update');
        Route::get('/delete/{id}', [FeatureController::class, 'delete'])->name('feature.delete');
    });

    Route::prefix('our-products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::patch('/{id}/edit', [ProductController::class, 'update'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    });

    Route::prefix('our-teams')->group(function () {
        Route::get('/', [TeamController::class, 'index'])->name('team.index');
        Route::get('/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/create', [TeamController::class, 'store'])->name('team.store');
        Route::get('/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
        Route::patch('/{id}/edit', [TeamController::class, 'update'])->name('team.update');
        Route::get('/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');
    });

    Route::prefix('setting')->group(function () {
        Route::get('edit', [SettingController::class, 'edit'])->name('setting.edit');
        Route::patch('edit', [SettingController::class, 'update'])->name('setting.update');
    });

    Route::prefix('footer')->group(function () {
        Route::get('edit', [FooterController::class, 'edit'])->name('footer.edit');
        Route::patch('edit', [FooterController::class, 'update'])->name('footer.update');
    });

    Route::prefix('profile')->group(function () {
        Route::get('edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('edit', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::prefix('banner')->group(function () {
        Route::get('edit', [BannerController::class, 'edit'])->name('banner.edit');
        Route::patch('edit', [BannerController::class, 'update'])->name('banner.update');
    });

    Route::prefix('title-section')->group(function () {
        Route::get('/', [TitleSectionController::class, 'index'])->name('title-section.index');
        Route::get('/{id}/edit', [TitleSectionController::class, 'edit'])->name('title-section.edit');
        Route::patch('/{id}/edit', [TitleSectionController::class, 'update'])->name('title-section.update');
    });

    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
        Route::patch('/{id}/edit', [MenuController::class, 'update'])->name('menu.update');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
