<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\VendeurController;
use App\Http\Controllers\AcheteurController;
use App\Http\Controllers\auth\AuthController;

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

Route::get('/', [HomeController::class, 'homePage'])->name('homePage');

// Routes publiques
Route::get('/login-page', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::get('/auth/google/login', [AuthController::class, 'googleLogin'])->name('googleLogin');
Route::get('/signup-page', [AuthController::class, 'signUpPage'])->name('signUpPage');
Route::post('/sign-up', [AuthController::class, 'handleSignup'])->name('handleSignup');

// Route de déconnexion, accessible uniquement aux utilisateurs authentifiés
Route::post('/user-logout', [AuthController::class, 'handleLogout'])->name('user.logout')->middleware(['no-back-history',]);

// Routes protégées par no-back-historyentification et non accessibles après déconnexion
Route::middleware(['no-back-history',])->group(function () {
    Route::get('/user-profil', [AuthController::class, 'userProfil'])->name('user.profil');

    // Routes de l'admin
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/table', [AdminController::class, 'adminTable'])->name('admin.table');
    Route::get('/admin/chart', [AdminController::class, 'adminChart'])->name('admin.chart');

    // Routes de l'agence
    Route::get('/agence/dashboard', [AgenceController::class, 'agenceDashboard'])->name('agence.dashboard');
    Route::get('/agence/table', [AgenceController::class, 'agenceTable'])->name('agence.table');
    Route::get('/agence/chart', [AgenceController::class, 'agenceChart'])->name('agence.chart');

    // Routes du vendeur
    Route::get('/vendeur/dashboard', [VendeurController::class, 'vendeurDashboard'])->name('vendeur.dashboard');
    Route::get('/vendeur/table', [VendeurController::class, 'vendeurTable'])->name('vendeur.table');
    Route::get('/vendeur/chart', [VendeurController::class, 'vendeurChart'])->name('vendeur.chart');

    // Routes de l'acheteur
    Route::get('/acheteur/dashboard', [AcheteurController::class, 'acheteurDashboard'])->name('acheteur.dashboard');
    Route::get('/acheteur/table', [AcheteurController::class, 'acheteurTable'])->name('acheteur.table');
    Route::get('/acheteur/chart', [AcheteurController::class, 'acheteurChart'])->name('acheteur.chart');

    // Routes de l'utilisateur standard
    Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('/user/table', [UserController::class, 'userTable'])->name('user.table');
    Route::get('/user/chart', [UserController::class, 'userChart'])->name('user.chart');
});






