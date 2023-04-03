<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\AdminMealController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminTableController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\AdminContactsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminOrdersController;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Logging\JUnit\TestMarkedIncompleteSubscriber;
use App\Mail\TestMail;

/*
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

Route::get('/redirects', [homeController::class, 'display']);
Route::get('/', [homeController::class, 'display'])->name('home.index');
Route::get('/contact', [contactsController::class, 'display'])->name('home.contact');
// Nav bar of home page
Route::post('/contact', [mailController::class, 'send'])->name('contact');


Route::get('/reservations', function () {
    return view('reservations');
})->name('home.reservations');

Route::get('/menu', [menuController::class, 'menuItemsForCategory'])->name('home.menu');

// Nav bar of admin home page




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware(['admin'])->group(function () {
    
    
    
    Route::resource('/admin-reservations',AdminReservationController::class);
    Route::resource('/admin-tables',AdminTableController::class);
    /////////////////////////////////////////////////
    Route::resource('/admin-orders',AdminOrdersController::class);
    Route::resource('/admin-users',AdminUsersController::class);
    Route::resource('/admin-contacts',AdminContactsController::class);
    /////////////////////////////////////////////////
    Route::get('/admin-reviews', function () {
        return view('admin.adminReviews');
    })->name('admin.reviews'); 
    
    Route::get('/admin-menu', [menuController::class, 'editMenu'])->name('admin.menus');

    Route::resource('/admin-meal',AdminMealController::class);
    Route::resource('/admin-category',AdminMenuController::class);



});


Route::get('/send', [contactsController::class, 'sendInfo'])->name('send.mail');
Route::get('/test',function(){
    Mail::to('yasmeenhfadel77@gmail.com')->send(new TestMail());
});
