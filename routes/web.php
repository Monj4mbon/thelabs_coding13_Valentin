<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeModifController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesCreateController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TemoignageController;
use App\Models\Banniere;
use App\Models\Blog;
use App\Models\ContactForm;
use App\Models\HomeModif;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Services;
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

Route::get('/adminContactForm', [ContactFormController::class, 'index']);
Route::get('/adminContactFormEdit/{id}', [ContactFormController::class, 'edit']);
Route::post('/adminContactFormUpdate/{id}', [ContactFormController::class, 'update']);

Route::get('/', function () {
    $navbarData = Navbar::all();
    $contactFormData = ContactForm::all();
    $bannièreData = Banniere::all();
    $servicesData = ServicesCreate::all();
    $servicesRand = ServicesCreate::all()->random(3);
    $teamData = Team::all();
    $teamRand = Team::all()->random(1);
    $teamRand2 = Team::all()->random(1);
    $temoignageDataOrder = Temoignage::orderBy('id', 'desc')->take(6)->get();
    $temoignageData = Temoignage::all();
    $logoData = Logo::all();
    $homeData = HomeModif::all();
    return view('accueil', compact('bannièreData', 'servicesData', 'teamData', 'temoignageData','navbarData', 'logoData', 'homeData', 'servicesRand', 'temoignageDataOrder', 'contactFormData', 'teamRand','teamRand2'));
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

Route::get('/adminLogo', [LogoController::class, 'index']);
Route::get('/adminLogo', [LogoController::class, 'create']);
Route::post('/adminLogoStore', [LogoController::class, 'store']);
Route::get('/adminLogoEdit/{id}', [LogoController::class, 'edit']);
Route::post('/adminLogoUpdate/{id}', [LogoController::class, 'update']);

Route::get('/adminHomeView', [HomeModifController::class, 'index']);
Route::post('/adminHomeViewStore', [HomeModifController::class, 'store']);
Route::get('/adminHomeViewEdit/{id}', [HomeModifController::class, 'edit']);
Route::post('/adminHomeViewUpdate/{id}', [HomeModifController::class, 'update']);

Route::get('/services', function () {
    $navbarData = Navbar::all();
    $contactFormData = ContactForm::all();
    $servicesData = ServicesCreate::all();
    $servicesModifData = Services::all();
    $servicesDataOrderGauche = ServicesCreate::orderBy('id', 'desc')->take(3)->get();
    $servicesDataOrderDroite = ServicesCreate::orderBy('id', 'desc')->take(3)->get();
    return view('services', compact('navbarData', 'servicesData', 'servicesDataOrderGauche', 'servicesDataOrderDroite', 'servicesModifData', 'contactFormData'));
});

Route::get('/adminServicesView', [ServicesController::class, 'index']);
Route::post('/adminServicesViewStore', [ServicesController::class, 'store']);
Route::get('/adminServicesViewEdit/{id}', [ServicesController::class, 'edit']);
Route::post('/adminServicesViewUpdate/{id}', [ServicesController::class, 'update']);

Route::get('/blog', function () {
    $navbarData = Navbar::all();
    $blogData = Blog::all();
    return view('blog', compact('navbarData', 'blogData'));
});

Route::get('/adminBlog', [BlogController::class, 'create']);
Route::post('/adminBlogStore', [BlogController::class, 'store']);
Route::get('/adminBlogEdit/{id}', [BlogController::class, 'edit']);
Route::post('/adminBlogUpdate/{id}', [BlogController::class, 'update']);

Route::get('/blog-post', function () {
    $navbarData = Navbar::all();
    return view('blog-post', compact('navbarData'));
});

Route::get('/contact', function () {
    $navbarData = Navbar::all();
    $contactFormData = ContactForm::all();
    return view('contact', compact('navbarData', 'contactFormData'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');