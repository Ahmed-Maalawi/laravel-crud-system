<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use app\models\user;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\DB;  //used for query builder

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "this is home page";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact',[Contact::class, 'index']);

Route::post('/category/add', [CategoryController::class, 'addCate'])->name('store.category');

// category Controller

Route::get('/category/all',[CategoryController::class, 'allCat'])->name('all.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

     $users = User::all();

    return view('dashboard', compact('users'));

})->name('dashboard');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.id');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
