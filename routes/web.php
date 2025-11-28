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
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Formulaire de contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


/*
|--------------------------------------------------------------------------
| 👤 Routes utilisateur (actions des visiteurs connectés ou non)
|--------------------------------------------------------------------------
*/

Route::prefix('user')->name('user.')->group(function () {
    // Routes protégées par authentification
    Route::middleware('auth')->group(function () {
        Route::get('like/{publication_id}', [UserPublicationController::class, 'like'])->name('like');
        Route::post('comment', [UserPublicationController::class, 'comment'])->name('comment');
        Route::delete('comment/{comment}', [UserPublicationController::class, 'destroyComment'])->name('comment.destroy');
    });
    
    // Routes publiques
    Route::get('publication/{publication}', [HomeController::class,'publication'])->name('publication');
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
