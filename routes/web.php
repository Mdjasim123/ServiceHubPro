<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ServiceController;

// // Public Routes
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Admin Routes
// // Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
// //     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// //     Route::resource('/users', UserController::class);
// //     Route::resource('/services', ServiceController::class);
// // });


// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     Route::resource('/users', UserController::class);
//     Route::resource('/services', ServiceController::class);
    
//     // Add service requests routes
//     Route::get('/service-requests', [AdminController::class, 'serviceRequests'])->name('admin.service-requests.index');
//     Route::post('/service-requests/{serviceRequest}/update-status', [AdminController::class, 'updateRequestStatus'])->name('admin.service-requests.update-status');
// });



// // User Routes
// Route::middleware(['auth', 'user'])->prefix('user')->group(function () {
//     Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
//     Route::get('/services', [UserController::class, 'services'])->name('user.services');
//     Route::post('/service-request', [UserController::class, 'requestService'])->name('user.service.request');
// });





use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::resource('/services', ServiceController::class);
    
    // Service Requests Routes
    Route::get('/service-requests', [AdminController::class, 'serviceRequests'])->name('service-requests.index');
    Route::post('/service-requests/{serviceRequest}/update-status', [AdminController::class, 'updateRequestStatus'])->name('service-requests.update-status');
});

// User Routes
Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/services', [UserController::class, 'services'])->name('services');
    Route::post('/service-request', [UserController::class, 'requestService'])->name('service.request');
});