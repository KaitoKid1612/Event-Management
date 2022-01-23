<?php

use App\Http\Controllers\Admin\AttendenceController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\MenuController;
use \App\Http\Controllers\Admin\EventController;
use \App\Http\Controllers\Auth\ForgotPasswordController;
use \App\Http\Controllers\Admin\StatisticalController;
use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\RoleController;
use \App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\ClassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::get('admin/users/forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('admin/users/forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('admin/users/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('admin/users/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::middleware(['auth'])->group(function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', [MainController::class, 'index'])-> name('admin');
        Route::get('main', [MainController::class, 'index']);
        Route::get('logout', [MainController::class, 'logout'])->name('logout');

        #loaisukien
        Route::prefix('menus')->group(function () {
            Route::get('add',  [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });

        #sukien
        Route::prefix('events')->group(function () {
            Route::get('add', [EventController::class, 'create']);
            Route::post('add', [EventController::class, 'store']);
            Route::middleware(['can:event-list'])->group(function() {
                Route::get('list', [EventController::class, 'index']);
            });
            Route::get('list', [EventController::class, 'index']);
            Route::get('edit/{event}', [EventController::class, 'show']);
            Route::post('edit/{event}', [EventController::class, 'update']);
            Route::get('confirm', [EventController::class, 'confirm']);
            Route::get('confirm/active/{event_id}/{active_code}', [EventController::class, 'updateActive'])->name('updateActive');
            Route::DELETE('destroy', [EventController::class, 'destroy']);
            Route::get('attendence', [AttendenceController::class, 'index'])->name('attendence_index');
            Route::get('attendence/view', [AttendenceController::class, 'view'])->name('attendence_view');
            Route::get('end', [AttendenceController::class, 'end']);
            Route::post('post', [AttendenceController::class, 'post'])->name('attendence_post');

        }); 

        Route::prefix('users')->group(function () {
            Route::get('create',  [UserController::class, 'create'])->name('users.create');
            Route::post('store', [UserController::class, 'store'])->name('users.store');
            Route::get('list', [UserController::class, 'index'])->name('users.list');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
            Route::post('edit/{id}', [UserController::class, 'update'])->name('users.update');
            Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');
        });

        Route::prefix('roles')->group(function () {
            Route::get('create',  [RoleController::class, 'create'])->name('roles.create');
            Route::post('store', [RoleController::class, 'store'])->name('roles.store');
            Route::get('list', [RoleController::class, 'index'])->name('roles.list');
            Route::get('edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
            Route::post('edit/{id}', [RoleController::class, 'update'])->name('roles.update');
            Route::DELETE('delete', [RoleController::class, 'delete'])->name('roles.delete');
        });

        Route::prefix('students')->group(function (){
            Route::get('create', [StudentController::class, 'create'])->name('students.create');
            Route::post('store', [StudentController::class, 'store'])->name('students.store');
            Route::get('list', [StudentController::class, 'index'])->name('students.list');
            Route::get('edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
            Route::post('edit/{id}', [StudentController::class, 'update'])->name('students.update');
            Route::DELETE('delete', [StudentController::class, 'delete'])->name('students.delete');
        });

        Route::prefix('classes')->group(function (){
            Route::get('create', [ClassController::class, 'create'])->name('classes.create');
            Route::post('store', [ClassController::class, 'store'])->name('classes.store');
            Route::get('list', [ClassController::class, 'index'])->name('classes.list');
            Route::get('edit/{id}', [ClassController::class, 'edit'])->name('classes.edit');
            Route::post('edit/{id}', [ClassController::class, 'update'])->name('classes.update');
            Route::DELETE('delete', [ClassController::class, 'delete'])->name('classes.delete');
        });

        #Upload
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);
    });
});

Route::get('/', [App\Http\Controllers\Frontend\MainController::class, 'index'])->name('frontend.home');
Route::get('/tin-tuc-su-kien', [ \App\Http\Controllers\Frontend\NewEventController::class, 'index'])->name('frontend.tin_tuc');
Route::post('/services/load-event', [ \App\Http\Controllers\Frontend\NewEventController::class, 'loadEvent']);
Route::get('/dang-nhap', [ \App\Http\Controllers\Frontend\Users\LoginController::class, 'index'])->name('frontend.dang_nhap');
Route::get('/dang-xuat', [ \App\Http\Controllers\Frontend\Users\LoginController::class, 'logout'])->name('frontend.dang_xuat');
Route::post('/dang-nhap/trang-chu', [\App\Http\Controllers\Frontend\Users\LoginController::class, 'trangchu']);

Route::middleware(['auth:student'])->group(function() {
    Route::prefix('student')->group(function () {
        Route::get('/', [\App\Http\Controllers\Frontend\MainController::class, 'index'])-> name('frontend.trangchu');
        Route::get('/profile', [\App\Http\Controllers\Frontend\MainController::class, 'profile'])-> name('student.profile');
        Route::get('/profile/edit', [\App\Http\Controllers\Frontend\MainController::class, 'edit'])-> name('student.editprofile');
        Route::get('/Thong-Tin-Hoat-Dong', [\App\Http\Controllers\Frontend\CartController::class, 'active'])-> name('student.active');
        Route::post('/add-to-cart', [\App\Http\Controllers\Frontend\CartController::class, 'addEvent'])-> name('student.cart');
    });
});

Route::get('su-kien/{id}-{slug}.html', [\App\Http\Controllers\Frontend\EventController::class, 'index']);
