<?php

use App\Livewire\Posts;
use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\FormNewPost;
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

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/posts', Posts::class);
Route::get('/create-new-post', FormNewPost::class);
