<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Paymentcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
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
// Route::get('/detail', [FrontController::class, 'detail'])->name('site.detail');
// Route::get('/view', [FrontController::class, 'views'])->name('service.view');
Route::get('/detail', [FrontController::class, 'detail'])->name('car.detail');
Route::get('/booking', [FrontController::class, 'booking'])->name('site.booking');
Route::get('/team', [FrontController::class, 'team'])->name('site.team');
Route::get('/testimonial', [FrontController::class, 'testimonial'])->name('site.testimonial');
Route::get('/car_list',[FrontController::class,'car_list'])->name('site.car_list');
// Route::get('/car_list/{$id}', [VehicleController::class, 'show'])->name('site.vehicle');
Route::get('service_view/{$id}',[ServiceController::class, 'show'])->name('service.view');

Route::get('/invoice',[FrontController::class,'ivoice'])->name('site.invoice');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/form', [AdminController::class, 'form'])->name('form.dashboard');
    Route::resource( 'vehicle', VehicleController::class );
    Route::resource( 'service', ServiceController::class );
    Route::resource( 'role', RoleController::class );
    Route::resource('user', UserController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('type', TypeController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('payment', Paymentcontroller::class);

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
