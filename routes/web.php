<?php

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

Route::get('/', function () {
    return view('welcome');
});
//=========================== START ORDERS ROUTE ============================================//
Route::name('commandes.')->prefix('commandes')->controller("")->group(function(){});
//=========================== END  ORDERS ROUTE ============================================//


//=========================== START  dashboards ROUTE ============================================//
Route::get('dashboards',function (){
    return view('Admin.dashbord');
});
//=========================== END  dashboards ROUTE ============================================//

//=========================== START  Produits ROUTE ============================================//

Route::name('Produits.')->prefix('Produits')->controller("")->group(function(){});

//=========================== END  Produits ROUTE ============================================//




//=========================== START  Auth ROUTE ============================================//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//=========================== END  Auth ROUTE ============================================//
