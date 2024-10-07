<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/courses', [WebsiteController::class, 'courses'])->name('courses');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [BackendController::class, 'users'])->name('users');
    Route::get('/user_profile', [BackendController::class, 'user_profile'])->name('user_profile');
    Route::get('/user_add', [BackendController::class, 'user_add'])->name('user_add');
    Route::post('/user_add', [BackendController::class, 'userAdd'])->name('user_add');
    Route::post('/user_delete', [BackendController::class, 'userDelete'])->name('user_delete');
    Route::get('/categories', [BackendController::class, 'categories'])->name('categories');
    Route::get('/category_add', [BackendController::class, 'category_add'])->name('category_add');
    Route::post('/category_add', [BackendController::class, 'categoryAdd']);
    Route::post('/category_update', [BackendController::class, 'categoryUpdate'])->name('category_update');
    Route::post('/category_delete', [BackendController::class, 'categoryDelete'])->name('category_delete');
    Route::get('/courses_all', [BackendController::class, 'courses'])->name('courses_all');
    Route::get('/course_add', [BackendController::class, 'course_add'])->name('course_add');
});

require __DIR__.'/auth.php';
