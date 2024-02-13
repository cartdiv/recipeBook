<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\User\UserController as AppUsers;

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

//Google Authentication Routes
Route::controller(SocialController::class)->group(function(){
    Route::get('auth/google', 'googleRedirect')->name('login.google');
    Route::get('auth/google/callback', 'googleLoginOrRegister');
});



Route::middleware(['auth','Roles:admin'])->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('/update/admin/profile', 'UpdateAdminProfile')->name('update.admin.profile');
        Route::get('/admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('/update/admin/password', 'UpdateAdminPassword')->name('update.admin.password');
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');

    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/all/user', 'AllUser')->name('all.user');
        Route::get('/active/user', 'ActiveUser')->name('active.user');
        Route::get('/inactive/user', 'InactiveUser')->name('inactive.user');
    });

});

Route::middleware(['auth','Roles:user'])->group(function(){

    Route::controller(AppUsers::class)->group(function(){
        Route::get('/dashboard', 'Dashboard')->name('dashboard');
        Route::get('/user/profile', 'UserProfile')->name('user.profile');
        Route::post('/update/user/profile', 'UpdateUserProfile')->name('update.user.profile');
        Route::get('/user/change/password', 'UserChangePassword')->name('user.change.password');
        Route::post('/update/user/password', 'UpdateUserPassword')->name('update.user.password');
        Route::get('/user/logout', 'UserLogout')->name('user.logout');


    });
});
Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
