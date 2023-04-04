<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\TableController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MealController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\TestimonialController;

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

    Route::resource('admin-reservations', ReservationController::class);
    Route::resource('admin-tables', TableController::class);

    Route::resource('admin-orders', OrderController::class);
    Route::resource('admin-users', UsersController::class);
    Route::resource('admin-branches', BranchController::class);
    Route::resource('admin-reviews',ReviewController::class);

    Route::resource('admin-meals', MealController::class);
    Route::resource('admin-categories', CategoryController::class);

    Route::resource('admin-orders',OrderController::class);

    Route::resource('admin-testimonials',TestimonialController::class);

    Route::resource('admin-users',UsersController::class);
});
