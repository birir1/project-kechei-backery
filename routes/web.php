<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');


use App\Http\Controllers\SuggestionController;

Route::get('/suggestions', [SuggestionController::class, 'create'])->name('suggestions.create');
Route::post('/suggestions', [SuggestionController::class, 'store'])->name('suggestions.store');


use App\Http\Controllers\ExperienceRatingController;

Route::post('/experience/rating', [ExperienceRatingController::class, 'submitRating'])->name('experience.rating.submit');


use App\Http\Controllers\FeedbackController;

Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('feedback.submit');


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/products', [PagesController::class, 'products'])->name('products');
Route::get('/order', [PagesController::class, 'orderOnline'])->name('order');
Route::get('/catering', [PagesController::class, 'catering'])->name('catering');
Route::get('/recipes', [PagesController::class, 'recipes'])->name('recipes');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/FAQ', [PagesController::class, 'faq'])->name('faq');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PagesController::class, 'terms'])->name('terms');

Route::get('/menu', [PagesController::class, 'menu'])->name('menu');
Route::get('/feedback', [PagesController::class, 'feedback'])->name('feedback');
Route::get('/FAQs', [PagesController::class, 'FAQs'])->name('FAQs');
Route::get('/ourhistory', [PagesController::class, 'ourhistory'])->name('ourhistory');
Route::get('/bakingtips', [PagesController::class, 'bakingtips'])->name('bakingtips');
Route::get('/breads', [PagesController::class, 'breads'])->name('breads');
Route::get('/pastries', [PagesController::class, 'pastries'])->name('pastries');
Route::get('/specials', [PagesController::class, 'specials'])->name('specials');
Route::get('/businessevents', [PagesController::class, 'businessevents'])->name('businessevents');
Route::get('/collaborativecatering', [PagesController::class, 'collaborativecatering'])->name('collaborativecatering');
Route::get('/orderonline', [PagesController::class, 'orderonline'])->name('orderonline');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';