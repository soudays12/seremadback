<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    UserController,
    ContactController,
    HomeController,
    AuthController,
    AdminPublicationController,
    AdminUserController,
    UserPublicationController
};

/*
|--------------------------------------------------------------------------
| 🌍 Routes publiques (visibles par tout le monde)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Formulaire de contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


/*
|--------------------------------------------------------------------------
| 👤 Routes utilisateur (actions des visiteurs connectés ou non)
|--------------------------------------------------------------------------
*/

Route::prefix('user')->name('user.')->group(function () {
    Route::get('like/{publication_id}', [UserPublicationController::class, 'like'])->name('like');
    Route::get('comment/{publication_id}', [UserPublicationController::class, 'comment'])->name('comment');
    Route::get('publication', [HomeController::class,'publication'])->name('publication');
    Route::get('allpublications', [HomeController::class,'allpublications'])->name('allpublications');


    Route::get('back', [HomeController::class,'back'])->name('back');
});


/*
|--------------------------------------------------------------------------
| 🔐 Routes d'authentification (inscription, connexion, déconnexion)
|--------------------------------------------------------------------------
*/

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('inscription', [AuthController::class, 'inscription'])->name('inscription');
    Route::post('register', [UserController::class, 'register'])->name('register');
});



/*
|--------------------------------------------------------------------------
| 🛠️ Routes d’administration
|--------------------------------------------------------------------------
*/


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('index');

    // Publications
    Route::resource('publications', AdminPublicationController::class);

    // Utilisateurs
    Route::resource('users', AdminUserController::class);
});