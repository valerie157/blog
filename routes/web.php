<?php

use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealController;

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

Route::resource('organizations  ', OrganizationController::class);
Route::resource('task', TasksController::class);
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('contacts', ContactController::class);
Route::get('contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/deals', [DealController::class, 'index'])->name('deals.index');
Route::get('/deals/create', [DealController::class, 'create'])->name('deals.create');
Route::post('/deals', [DealController::class, 'store'])->name('deals.store');

Route::middleware('auth')->group(function () {
    Route::resource('organizations', OrganizationController::class);
    Route::get('/contact', [ContactController::class, 'index'])->middleware(['auth', 'verified'])->name('contact');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
