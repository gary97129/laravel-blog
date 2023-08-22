<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\OrmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/posts', [PostsController::class,'index']);
Route::get('/posts/{id}', [PostsController::class,'show']);

Route::prefix('orm')->group(function () {
    Route::get("/create", [OrmController::class, 'create']);
    Route::get("/index", [OrmController::class, 'index']);
    Route::get("/show/{id}", [OrmController::class, 'show']);
    Route::get("/update/{id}", [OrmController::class, 'update']);
    Route::get("/destroy/{id}", [OrmController::class, 'destroy']);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home.index");
    Route::get('posts', [AdminPostsController::class, 'index'])->name("posts.index");
    Route::get('posts/create', [AdminPostsController::class, 'create'])->name("posts.create");
    Route::post('posts', [AdminPostsController::class, 'store'])->name("posts.store");
    Route::get('posts/{post}/edit', [AdminPostsController::class, 'edit'])->name("posts.edit");
    Route::patch('posts/{post}', [AdminPostsController::class, 'update'])->name("posts.update");
    Route::delete('posts/{post}', [AdminPostsController::class, 'destroy'])->name("posts.destroy");
});
