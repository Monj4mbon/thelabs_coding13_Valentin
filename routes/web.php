<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\ServicesCreateController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TemoignageController;
use App\Models\Banniere;
use App\Models\Navbar;
use App\Models\ServicesCreate;
use App\Models\Team;
use App\Models\Temoignage;
use Illuminate\Support\Facades\Auth;
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

Route::get('/adminNavbar', [NavbarController::class, 'index']);
Route::get('/adminNavbarEdit/{id}', [NavbarController::class, 'edit']);
Route::post('/adminNavbarUpdate/{id}', [NavbarController::class, 'update']);

Route::get('/', function () {
    $navbarData = Navbar::all();
    $bannièreData = Banniere::all();
    $servicesData = ServicesCreate::all();
    $teamData = Team::all();
    $temoignageData = Temoignage::all();
    return view('accueil', compact('bannièreData', 'servicesData', 'teamData', 'temoignageData','navbarData'));
});
Route::get('/adminAccueil', [AccueilController::class, 'index']);

Route::get('/adminServices', [ServicesCreateController::class, 'index']);
Route::get('/adminServices', [ServicesCreateController::class, 'create']);
Route::post('/adminServicesStore', [ServicesCreateController::class, 'store']);
Route::get('/adminServicesEdit/{id}', [ServicesCreateController::class, 'edit']);
Route::post('/adminServicesUpdate/{id}', [ServicesCreateController::class, 'update']);
Route::get('/adminServicesDestroy/{id}', [ServicesCreateController::class, 'destroy']);

Route::get('/adminBanniere', [BanniereController::class, 'index']);
Route::get('/adminBanniere', [BanniereController::class, 'create']);
Route::post('/adminBanniereStore', [BanniereController::class, 'store']);
Route::get('/adminBanniereDestroy/{id}', [BanniereController::class, 'destroy']);

Route::get('/adminTeam', [TeamController::class, 'index']);
Route::get('/adminTeam', [TeamController::class, 'create']);
Route::post('/adminTeamStore', [TeamController::class, 'store']);
Route::get('/adminTeamEdit/{id}', [TeamController::class, 'edit']);
Route::post('/adminTeamUpdate/{id}', [TeamController::class, 'update']);
Route::get('/adminTeamDestroy/{id}', [TeamController::class, 'destroy']);

Route::get('/adminTemoignage', [TemoignageController::class, 'index']);
Route::get('/adminTemoignage', [TemoignageController::class, 'create']);
Route::post('/adminTemoignageStore', [TemoignageController::class, 'store']);
Route::get('/adminTemoignageEdit/{id}', [TemoignageController::class, 'edit']);
Route::post('/adminTemoignageUpdate/{id}', [TemoignageController::class, 'update']);
Route::get('/adminTemoignageDestroy/{id}', [TemoignageController::class, 'destroy']);

Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog-post', function () {
    return view('blog-post');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
