<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use App\Models\User;
use App\Models\Item;
use App\Models\Stock;

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

Route::get('/login', function () {
    return view('login');
});

// LOGIN
Route::get('/register', [UserController::class, 'Register'])->name('Register');
Route::post('/register', [UserController::class, 'storeRegister'])->name('storeRegister');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

// MIDDLEWARE

Route::middleware('onLogin')->group(function() {

    Route::get('/home', function () {
        return view('home',);
    });

    // LOGOUT
    Route::get('/logout', [LoginController::class, 'logout']);

    // ITEMS
    Route::get('/items', [ItemController::class, 'index']);
    Route::get('/items/create', [ItemController::class, 'create']);
    Route::post('/items', [ItemController::class, 'store']);
    Route::get('/items/{id}/edit', [ItemController::class, 'edit']);
    Route::delete('items/{id}', [ItemController::class, 'destroy']);
    // ITEMS CUSTOM
    Route::post('items/{id}/updateItem', [ItemController::class, 'updateItem'])->name('updateItem');
    Route::get('/items/{stock}/goReturn', [ItemController::class, 'goReturn'])->name('goReturn');
    Route::post('/items/{stock}/runningGo', [ItemController::class, 'runningGo'])->name('runningGo');


    // STOCKS
    Route::get('/stocks', [StockController::class, 'index']);
    Route::get('/stocks/{id}/edit', [StockController::class, 'edit']);
    Route::post('/stocks/{id}', [StockController::class, 'update']);
    // STOCKS CUSTOM
    Route::delete('stocks/{id}', [StockController::class, 'destroy'])->name('destroy');
    Route::delete('/stocks', [StockController::class, 'deleteAll'])->name('deleteAll');


    // USERS
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users', [UserController::class, 'store']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    // HISTORY
    Route::get('/history', [HistoryController::class, 'index']);

    // OLD THEME
    Route::get('/oldTheme/oldLogin', function () {
        return view('oldTheme.oldLogin',);
    });
    Route::get('/oldTheme/oldHome', function () {
        return view('oldTheme.oldHome',);
    });
    Route::get('/oldTheme/barangs/index', function () {
        $barangs = Item::latest()->paginate(5);

        return view('oldTheme.barangs.index', compact('barangs'));
    });
    Route::get('/oldTheme/barangs/create', function () {
        return view('oldTheme.barangs.create',);
    });
    Route::get('/oldTheme/rusaks/index', function () {
        $rusaks = Stock::latest()->paginate(5);

        return view('oldTheme.rusaks.index', compact('rusaks'));
    });

    // PORTOFOLIO
    Route::get('/portofolio', function () {
        return view('portofolio',);
    });

    // PROJECT PAK TUGANGGA
    Route::get('/arsitektur', function () {
        return view('arsitektur',);
    });


});