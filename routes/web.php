<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BatchController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/termsncondition', function () {
    return view('termsncondition');
})->name('termsncondition');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
// Route::get('/refund', function () {
//     return view('refund');
// });

Route::get('/webdev', function () {
    return view('webdev');
})->name('webdev');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/iot', function () {
    return view('iot');
})->name('iot');
// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');
Route::get('/contact',  [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Route::get('/career', function () {
//     return view('career');
// })->name('career');
Route::get('/career',  [CareerController::class, 'index'])->name('career');
Route::get('/healthcare', function () {
    return view('healthcare');
})->name('healthcare');

// Route::get('/index', function () {
//     return view('blog.index');
// })->name('blog.index');
// Route::get('/show', function () {
//     return view('blog.show');
// })->name('blog.show');

// career
// Route::get('/career', [CareerController::class, 'index'])->name('career');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/banners', [HomeController::class, 'index'])->name('banners');
Route::get('/team', [HomeController::class, 'index'])->name('team');
Route::get('/batch', [HomeController::class, 'index'])->name('batch');
// Route::get('/team', [HomeController::class, 'index'])->name('team');

