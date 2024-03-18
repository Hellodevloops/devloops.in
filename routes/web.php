<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
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
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/termsncondition', function () {
    return view('termsncondition');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/refund', function () {
    return view('refund');
});

Route::get('/webdev', function () {
    return view('webdev');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/iot', function () {
    return view('iot');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/career', function () {
//     return view('career');
// });
Route::get('/healthcare', function () {
    return view('healthcare');
});

// career
Route::get('/career', [CareerController::class, 'index'])->name('career');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');



