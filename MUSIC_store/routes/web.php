<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\LigneCommandeController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\EtudiantController;
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
*/

Route::get('/', function () {
    return view('welcome');
});

//categories routes
Route::resource('Categorie', CategorieController::class);

//instruments routes
Route::resource('Instrument', InstrumentController::class);
Route::post('Instrument/search', [InstrumentController::class, 'search'])->name('Instrument.search');

Route::resource('Cart', CartController::class);

//users routes
Route::group(['prefix' => 'User/'], function() {
    Route::get('SignUp', [UserController::class, 'getSignUp'])->name('User.getSignUp');
    Route::post('SignUp', [UserController::class, 'SignUp'])->name('User.SignUp');
    Route::get('SignIn', [UserController::class, 'getSignIn'])->name('User.getSignIn');
    Route::post('SignIn', [UserController::class, 'SignIn'])->name('User.SignIn');
    Route::get('Logout', [UserController::class, 'logout'])->name('User.logout');
    Route::get('newPWD', [UserController::class, 'setMdp'])->name('User.setMdp');
    Route::get('newPWD', [UserController::class, 'setMdp_'])->name('User.setMdp_');
});
Route::resource('User', UserController::class);

//cart routes
Route::post('addToCart/{id}', [CartController::class, 'add'])->name('Cart.add');
Route::get('Cart', [CartController::class, 'getCart'])->name('Cart.getCart');
Route::get('RemoveCart', [CartController::class, 'remove'])->name('Cart.remove');
Route::get('RemoveItem/{id}', [CartController::class, 'removeItem'])->name('Cart.removeItem');

//commandes routes
Route::get('Commande', [CommandeController::class, 'store'])->name('Commande.store');

//ligne-commandes routes
Route::get('LigneCommande', [LigneCommandeController::class, 'store'])->name('LigneCommande.store');

// facture routes
Route::get('Facture/{i}', [FactureController::class, 'downloadPDF'])->name('Facture.downloadPDF');
Route::get('Activites', [FactureController::class, 'index'])->name('Facture.index');
Route::get('download/{i}', [FactureController::class, 'download'])->name('Facture.download');

