<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('index');
});
/* Route::get('/publicitaire', function () {
    return view('publicitaire');
}); */
/* Route::get('/construction', function () {
    return view('construction');
}); */
Route::get('/cons', function () {
    return view('cons');
});
Route::get('/reseau', function () {
    return view('reseauu');
});
/* Route::get('/vidéo', function () {
    return view('video');
}); */
Route::get('/video', function () {
    return view('vd');
});
/* Route::get('/contact', function () {
    return view('contactpage');
}); */
Route::get('/publication', function () {
    return view('pub');
});
Route::get('/contact', function () {
    return view('cntn');
});
Route::post('/send-email' , [ContactController::class, 'sendemail'])->name('send.email');
