<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'home'])->name('site.home');
Route::get('/home', [FrontController::class, 'home'])->name('site.home');
Route::get('/about', [FrontController::class, 'about'])->name('site.about');
Route::get('/service', [FrontController::class, 'service'])->name('site.service');
Route::get('/contact', [FrontController::class, 'contact'])->name('site.contact');
Route::get('/details', [FrontController::class, 'detail'])->name('site.detail');
Route::get('/booking', [FrontController::class, 'booking'])->name('booking');
Route::get('/team', [FrontController::class, 'team'])->name('site.team');
Route::get('/testimonial', [FrontController::class, 'testimonial'])->name('site.testimonial');
Route::get('/car_list',[FrontController::class,'car_list'])->name('site.car_list');


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
   // Route::get('/vehicle', [AdminController::class, 'car_list'])->name('admin.vehicle');
    Route::get('/form', [AdminController::class, 'form'])->name('form.dashboard');
    Route::resource('vehicle', VehicleController::class);
    Route::resource('user', DetailController::class);
    // Route::get('/search',[AdminController::class,'search'])->name('search.dashboard');
    
});
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// Route::get('/form', [AdminController::class, 'form'])->name('form.dashboard');
 Route::get('/car', function () {
    return view('welcome');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   // after login


});

require __DIR__.'/auth.php';
