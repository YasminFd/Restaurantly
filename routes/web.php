<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\TableController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MealController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\ordersController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReservationController as userReservationController;


/*
/*
|--------------------------------------------------------------------------{{  }}
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Routes
Route::get('/', [homeController::class, 'display'])->name('home.index');
Route::get('/redirects', [homeController::class, 'display']);
Route::get('/marks/{id}', [homeController::class, 'mark'])->name('marks');


// Contacts Routes
Route::get('/contact', [contactsController::class, 'display'])->name('home.contact');
Route::post('/send', [contactsController::class, 'sendInfo'])->name('contact');

// Reservation Routes
Route::get('/reservations', [userReservationController::class, 'viewReservation'])->name('home.reservations');
Route::get('/bookReservation', [userReservationController::class, 'addReservation'])->name('bookReservation');

// Menu Routes
Route::get('/menu', [menuController::class, 'menuItemsForCategory'])->name('home.menu');
Route::get('/view-meal/{i}', [menuController::class, 'viewMeal'])->name('home.menu.view');

// Cart and Order Routes
Route::resource('/cart', CartController::class);
Route::get('/clear/{i}', [CartController::class, 'clear'])->name('clear');
Route::get('/order/{i}/{total}', [orderController::class, 'addOrder'])->name('home.order');

// Review Routes
Route::post('/review', [commentsController::class, 'addReview'])->name('review');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// Admin Routes
Route::middleware(['admin'])->group(function () {

    // Notification Routes
    Route::get('/admin-notifications', function () {
        return view('admin.notifications');
    })->name('admin-notifications');
    Route::get('/mark/{id}', [AdminController::class, 'mark'])->name('mark');
    Route::get('/mark-all', [AdminController::class, 'markNotification'])->name('markRead');
    Route::get('/delete/{id}', [AdminController::class, 'deleteNotification'])->name('delete');
    Route::get('/delete-all', [AdminController::class, 'deleteNotifications'])->name('deleteAll');


    // Resource routes for each type
    Route::resource('admin-reservations', ReservationController::class);
    Route::resource('admin-tables', TableController::class);
    Route::resource('admin-orders', OrdersController::class);
    Route::resource('admin-users', UsersController::class);
    Route::resource('admin-branches', BranchController::class);
    Route::resource('admin-reviews', ReviewController::class);
    Route::resource('admin-meals', MealController::class);
    Route::resource('admin-categories', CategoryController::class);
    Route::resource('admin-testimonials', TestimonialController::class);
});
