<?php

use App\Http\Controllers\CasesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamsController;
use App\Notifications\Consultation;
use Illuminate\Support\Facades\Notification;
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

Route::get('', [PagesController::class, 'welcome'])->name('welcome');
Route::get('about-us', [PagesController::class, 'aboutUs'])->name('about-us');

/**
 * Services
 */

Route::prefix('services')->group(function () {
    Route::get('', [ServicesController::class, 'index'])->name('services.index');
    Route::get('technology-commercialization', [ServicesController::class, 'technology_commercialization'])->name('services.technology-commercialization');
    Route::get('strategic-growth', [ServicesController::class, 'strategic_growth'])->name('services.strategic-growth');
    Route::get('innovation-management', [ServicesController::class, 'innovation_management'])->name('services.innovation-management');
    Route::get('voice-of-the-customer', [ServicesController::class, 'voice_of_the_customer'])->name('services.voice-of-the-customer');
    Route::get('software-development', [ServicesController::class, 'software_development'])->name('services.software-development');
});

Route::prefix('cases')->group(function () {
    Route::get('refocus', [CasesController::class, 'refocus'])->name('cases.refocus');
    Route::get('refocus', [CasesController::class, 'refocus'])->name('cases.refocus');
});

Route::prefix('teams')->group(function () {
    Route::get('/{name}', [TeamsController::class, 'team_details'])->name('teams.details');
});

Route::prefix('contact-us')->group(function () {
    Route::get('', [PagesController::class, 'contactUs'])->name('contact-us');
    Route::post('send', [PagesController::class, 'submitContactForm'])->name('contact-us.send');
});
