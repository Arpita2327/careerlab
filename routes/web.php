<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileUpdateController;
use App\Http\Controllers\UserblogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home.index');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('user.login');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('user.register');


Auth::routes();


//admin
Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>''],function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::resources([
        'category' => CategoryController::class,
        'post'=> PostController::class,
        'users'=> ProfileController::class,
        'profile' => ProfileUpdateController::class,
        
    ]);
   
    
});



//instructor

Route::group(['prefix' => 'instructor', 'middleware' => ['instructor', 'auth'], 'namespace' => 'instructor'], function () {
    Route::get('dashboard', [App\Http\Controllers\Instructor\InstructorController::class, 'index'])->name('instructor.dashboard');
});


//user
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'user'], function () {
    Route::get('dashboard', [App\Http\Controllers\User\UserController::class, 'index'])->name('user.dashboard');
    
});

Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'user'], function () {
    Route::get('bookings', [App\Http\Controllers\User\BookingsControllers::class, 'bookings'])->name('user.booking');
});

Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'user'], function () {
    Route::get('instructorList', [App\Http\Controllers\User\InstructorController::class, 'index'])->name('user.instructorList');
});

Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'user'], function () {
    Route::get('confirmation', [App\Http\Controllers\User\ConfirmationController::class, 'index'])->name('user.confirmation');
});

Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => ''], function () {
    Route::get('blogs', [App\Http\Controllers\User\BlogsController::class, 'index'])->name('user.blogs');

    Route::resources([
        
      
        'posts' => UserblogController::class,

    ]);
});
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'user'], function () {
    Route::get('about', [App\Http\Controllers\AboutController::class, 'index'])->name('user.about');
});