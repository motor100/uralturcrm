<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NotificationController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard.test');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');


    Route::get('/dashboard/clients', [ClientController::class, 'index']);

    Route::get('/dashboard/clients/create', [ClientController::class, 'create'])->name('clients-create');

    Route::post('/dashboard/clients/store', [ClientController::class, 'store'])->name('clients-store');

    Route::get('/dashboard/clients/{id}', [ClientController::class, 'show']);

    Route::get('/dashboard/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients-edit');

    Route::post('/dashboard/clients/update', [ClientController::class, 'update'])->name('clients-update');

    Route::get('/dashboard/clients/{id}/destroy', [ClientController::class, 'destroy'])->name('clients-destroy');


    Route::get('/dashboard/notifications', [NotificationController::class, 'index']);

    Route::get('/dashboard/notifications/create', [NotificationController::class, 'create'])->name('notifications-create');

    Route::post('/dashboard/notifications-store', [NotificationController::class, 'store'])->name('notifications-store');

    Route::get('/dashboard/notification/{id}', [NotificationController::class, 'show']);

    Route::get('/dashboard/notification/{id}/edit', [NotificationController::class, 'edit'])->name('notification-edit');

    Route::post('/dashboard/notification/update', [NotificationController::class, 'update'])->name('notification-update');

    Route::get('/dashboard/notification/{id}/destroy', [NotificationController::class, 'destroy'])->name('notification-destroy');


    Route::get('/dashboard/current-notifications', [AdminController::class, 'current_notifications']);


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Проверка роута через middleware на роль.
 *
 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
 */
Route::group(['middleware' => 'role:web-developer'], function() {
    // Route::get('/test-middleware', function() {
    //    return 'Добро пожаловать, Веб-разработчик';
    // });

    Route::get('/dashboard/users', [AdminController::class, 'users']);
});


require __DIR__.'/auth.php';
