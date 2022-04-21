<?php

use App\Models\Vente;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Commande;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArticleController ;
use \App\Http\Controllers\CategoryController ;
use \App\Http\Controllers\SupplierController ;
use \App\Http\Controllers\VenteController ;
use \App\Http\Controllers\CommandeController ;

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

    $allVentes = Vente::all() ;
    $somme_total_vente = 0 ;
    foreach ($allVentes as $vente) {
        $somme_total_vente += $vente->total_price ;
    }

    $allAchats = Commande::all() ;
    $somme_total_achat = 0 ;
        foreach ($allAchats as $achat) {
        $somme_total_achat += $achat->total_price ;
    }
    return view('welcome')
        ->with(['allVentes'=>Vente::all()])
        ->with(['total_categorie'=>Category::all()->count()])
        ->with(['total_article'=>Article::all()->count()])
        ->with(['total_fournisseur'=>Supplier::all()->count()])
        ->with(['total_commande'=>Commande::all()->count()])
        ->with(['somme_total_vente'=> ($somme_total_vente)])
        ->with(['somme_total_achat'=> ($somme_total_achat)])
        ->with(['total_somme_caisse'=> ($somme_total_vente - $somme_total_achat)])   ;
});

/***************************** CATEGORIE ******************************/
Route::get('/ajouter-categorie', [CategoryController::class, 'add']);
Route::get('/liste-categorie', [CategoryController::class, 'findAll']);
Route::get('/detail-categorie', [CategoryController::class, 'findById']);
Route::get('/modifier-categorie', [CategoryController::class, 'edit']);
Route::post('/enregistrer-categorie', [CategoryController::class, 'save']);
Route::post('/update-categorie', [CategoryController::class, 'update']);
Route::get('/supprimer-categorie', [CategoryController::class, 'delete']);

/***************************** ARTICLE ******************************/
Route::get('/ajouter-article', [ArticleController::class, 'add']);
Route::post('/enregistrer-article', [ArticleController::class, 'save']);
Route::get('/liste-article', [ArticleController::class, 'findAll']);
Route::get('/detail-article', [ArticleController::class, 'findById']);
Route::get('/modifier-article', [ArticleController::class, 'edit']);
Route::post('/update-article', [ArticleController::class, 'update']);
Route::get('/supprimer-article', [ArticleController::class, 'delete']);

/***************************** FOURNISSEUR ******************************/
Route::get('/ajouter-fournisseur', [SupplierController::class, 'add']);
Route::post('/enregistrer-fournisseur', [SupplierController::class, 'save']);
Route::get('/liste-fournisseur', [SupplierController::class, 'findAll']);
Route::get('/detail-fournisseur', [SupplierController::class, 'findById']) ;
Route::get('/modifier-fournisseur', [SupplierController::class, 'edit']);
Route::post('/update-fournisseur', [SupplierController::class, 'update']);
Route::get('/supprimer-fournisseur', [SupplierController::class, 'delete']);

/***************************** VENTE ******************************/
Route::post('/enregistrer-vente', [VenteController::class, 'save']);
Route::get('/liste-vente', [VenteController::class, 'findAll']);
Route::get('/supprimer-vente', [VenteController::class, 'delete']);

/***************************** ACHAT & COMMANDE ******************************/
Route::post('/enregistrer-commande', [CommandeController::class, 'save']);
Route::get('/etat-caisse', [CommandeController::class, 'findAll']);
Route::get('/supprimer-commande', [CommandeController::class, 'delete']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
