<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\SellOnBehalfOrderController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;
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


//Routes for viewing car listings in the home page and detailed view of each unit
Route::get('/', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');


// Routes for selling on behalf
Route::get('sell-on-behalf/car-details', [SellOnBehalfOrderController::class, 'createCarDetailsForm'])->name('sell_on_behalf.car-details');
Route::post('sell-on-behalf/car-details', [SellOnBehalfOrderController::class, 'postCarDetailsForm'])->name('sell_on_behalf.car-details.post');

Route::get('sell-on-behalf/seller-details', [SellOnBehalfOrderController::class, 'createSellerDetailsForm'])->name('sell_on_behalf.seller-details');
Route::post('sell-on-behalf/seller-details', [SellOnBehalfOrderController::class, 'postSellerDetailsForm'])->name('sell_on_behalf.seller-details.post');

//  About and contact page routes
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

//search
Route::get('/search', [CarController::class, 'search'])->withoutMiddleware('admin')->name('cars.search');


//Route::get('/dashboard', function () {
  //  return view('car-display-card');
//})->middleware(['auth', 'verified'])->name('dashboard');



//test routes for CarApi
Route::get('/test-api', [VehicleController::class, 'testApi']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
