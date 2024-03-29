<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [PostController::class,'index']
)->name('welcome')->middleware('auth');
Route::post('/',[PostController::class, 'store'])->name('addpost')->middleware('auth');



Route::get('/signup', [AuthController::class, 'showRegister'])->name('register');
Route::post('/signup', [AuthController::class, 'signup'])->name('register');
Route::get('/signin', [AuthController::class, 'showLogin'])->name('signin');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/post/{id}', [PostController::class, 'getPost'])->name('getPost')->middleware('auth');
Route::post('/post', [CommentController::class, 'addComment'])->name('comments.store')->middleware('auth');
Route::delete('/delete/{id}',[CommentController::class,'deleteComment'])->name('deletecomment');

Route::post('/like',[LikeController::class, 'addLike'])->name('like.store')->middleware('auth');





Route::get('/profile',function(){return view('profile');})->name('profile')->middleware('auth');

Route::get('/profile', [PostController::class,'getPosts']
)->name('profile')->middleware('auth');
Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::put('posts/{post}', 'PostController@modifier')->name('posts.update');


Route::delete('/delete/{id}',[PostController::class,'delete'])->name('delete')->middleware('auth');

Route::put('/update/{id}', [PostController::class, 'update'])->name('update')->middleware('auth');

Route::get('/message',function(){return view('message');})->name('message')->middleware('auth');

// Route to follow a user
Route::post('/user/{user}/follow', [UserController::class, 'follow'])->name('user.follow')->middleware('auth');

// Route to unfollow a user
Route::delete('/user/{user}/unfollow', [UserController::class, 'unfollow'])->name('user.unfollow')->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');

Route::get('/profile/{id}',[UserController::class,'profile'])->name('profile_user')->middleware('auth');
Route::get('/add/{id}',[FollowController::class, 'addFollow'])->name('addFollow')->middleware('auth');
Route::get('/delete/{id}',[FollowController::class, 'deleteFollow'])->name('deleteFollow')->middleware('auth');

Route::delete('/comment/{id}',[PostController::class, 'deleteComment'])->name('deleteComment')->middleware('auth');