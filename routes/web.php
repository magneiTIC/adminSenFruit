<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\ClientController;
// use App\Http\Controllers\FactureController;
use App\Http\Controllers\VendeurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\LigneVenteController;
use App\Http\Controllers\AdminProfileController;
// use App\Http\Controllers\LigneCommandeController;
// use App\Http\Controllers\FactureVendeurController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\VendeurProfileController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


//  ------------Espace vendeur------------------
// Route::group(['middleware' => 'auth',], function () {

	Route::middleware(['auth','vendeur'])->group(function(){

	//dashboard
	Route::get('dashboardVendeur','App\Http\Controllers\VendeurController@dashboard')->name('dashboardVendeur');



	//ligneVente
	Route::get('add-ligneVente','App\Http\Controllers\LigneVenteController@page')->name('ligneVente.add');

	Route::post('insert-ligneVente','App\Http\Controllers\LigneVenteController@store');
	Route::get('list-ligneVente','App\Http\Controllers\LigneVenteController@index')->name('ligneVente.list');
	Route::get ('edit-ligneVente/{id}','App\Http\Controllers\LigneVenteController@edit');
	Route::post ('update-ligneVente/{id}','App\Http\Controllers\LigneVenteController@update');
	Route::get ('delete-ligneVente/{id}','App\Http\Controllers\LigneVenteController@destroy');


	//calendrier
	Route::get('calendrier','App\Http\Controllers\CalendrierController@index')->name('calendrier');
	

	// //Facture
	// Route::get('list-facture-vendeur',function(){
	// 	return view('vendeur.facture.list');
	// })->name('facture.list.vendeur');
	// // Route::get('list-facture','App\Http\Controllers\FactureVendeurController@index')->name('facture.list');
	// Route::get('show-facture/{id}','App\Http\Controllers\FactureVendeurController@index')->name('facture.show');

	//Edit
	Route::get ('edit-vendeurV','App\Http\Controllers\VendeurController@editV')->name('vendeur.editV');
	Route::post ('update-vendeurV/{id}','App\Http\Controllers\VendeurController@updateV')->name('vendeur.update');




});


//  -------------Espace Admin------------------
// Route::group(['middleware' => 'auth',], function () {
	Route::middleware(['auth','admin'])->group(function(){

	Route:: get ('dashboardAdmin','App\Http\Controllers\AdministrateurController@index')->name('dashboardAdmin');


	Route::get('supp','App\Http\Controllers\AdministrateurController@supp')->name('supp');

	//Client
	Route::get('list-client','App\Http\Controllers\ClientController@index')->name('client.list');
	Route::get ('delete-client/{id}','App\Http\Controllers\ClientController@delete');

	Route::get('list-client-del',function(){
		return view('admin.client.del');
	})->name('client.del');


	//Vendeur
	Route::get('add-vendeur',function(){
		return view('admin.vendeur.add');
	})->name('vendeur.add');

	Route::post('insert-vendeur','App\Http\Controllers\VendeurController@store');
	Route::get('list-vendeur','App\Http\Controllers\VendeurController@index')->name('vendeur.list');
	Route::get ('edit-vendeur/{id}','App\Http\Controllers\VendeurController@edit');
	Route::post ('update-vendeur/{id}','App\Http\Controllers\VendeurController@update');
	Route::get ('delete-vendeur/{id}','App\Http\Controllers\VendeurController@delete');

	Route::get('list-vendeur-del',function(){
		return view('admin.vendeur.del');
	})->name('vendeur.del');


	//Fruit
	Route::get('add-fruit',function(){
		return view('admin.fruit.add');
	})->name('fruit.add');

	Route::post('insert-fruit','App\Http\Controllers\FruitController@store');
	Route::get('list-fruit','App\Http\Controllers\FruitController@index')->name('fruit.list');
	Route::get ('edit-fruit/{id}','App\Http\Controllers\FruitController@edit');
	Route::post ('update-fruit/{id}','App\Http\Controllers\FruitController@update');
	Route::get ('delete-fruit/{id}','App\Http\Controllers\FruitController@destroy');

	
	//Commande
	Route::get('list-commande',function(){
		return view('admin.commande.list');
	})->name('commande.list');
	Route::get('list-commande','App\Http\Controllers\CommandeController@index')->name('commande.list');
	Route::get('show-commande/{id}','App\Http\Controllers\CommandeController@show')->name('commande.show');
	Route::post('update-commande/{id}','App\Http\Controllers\CommandeController@update')->name('commande.update');



	// //Facture
	// Route::get('list-facture',function(){
	// 	return view('admin.facture.list');
	// })->name('facture.list');
	// // Route::get('list-facture','App\Http\Controllers\FactureVendeurController@index')->name('facture.list');
	// Route::get('show-facture/{id}','App\Http\Controllers\FactureVendeurController@index')->name('facture.show');





});
// -----------------------ressources--------------------------

Route:: resources([
    'vendeur'=> App\Http\Controllers\VendeurController::class,
    'fruit'=> App\Http\Controllers\FruitController::class,
    'client'=> App\Http\Controllers\ClientController::class,
    // 'ligneCommande'=> App\Http\Controllers\LigneCommandeController::class,
    'ligneVente'=> App\Http\Controllers\LigneVenteController::class,
    // 'facture'=> App\Http\Controllers\FactureController::class,
    'livraison'=> App\Http\Controllers\LivraisonController::class,
]);

// -------------User---------------


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::post('log','App\Http\Controllers\UserController@logout')->name('log');

});

