<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/take-my-online-course', [SiteController::class, 'takeMyOnlineCourse'])->name('takeMyOnlineCourse');
Route::get('/best-online-exam-help', [SiteController::class, 'bestOnlineExamHelp'])->name('best-online-exam-help');
Route::get('/online-test-help', [SiteController::class, 'onlineTestHelp'])->name('online-test-help');
Route::get('/subjects', [SiteController::class, 'subjects'])->name('subjects');
Route::get('/reviews', [SiteController::class, 'reviews'])->name('reviews');
Route::get('/reviews/reviews-2', [SiteController::class, 'reviews2'])->name('reviews-2');
Route::get('/reviews/reviews-3', [SiteController::class, 'reviews3'])->name('reviews-3');
Route::get('/reviews/reviews-4', [SiteController::class, 'reviews4'])->name('reviews-4');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/united-states', [SiteController::class, 'unitedStates'])->name('united-states');
Route::get('/united-states/michigan-online-classes', [SiteController::class, 'michiganOnlineClasses']);
Route::get('/united-states/montana-online-classes', [SiteController::class, 'montanaOnlineClasses']);
Route::get('/united-states/california-online-classes', [SiteController::class, 'californiaOnlineClasses']);
Route::get('/united-states/mississippi-online-classes', [SiteController::class, 'mississippiOnlineClasses']);
Route::get('/united-states/tennessee-online-classes', [SiteController::class, 'tennesseeOnlineClasses']);
Route::get('/united-states/florida-online-classes', [SiteController::class, 'floridaOnlineClasses']);
Route::get('/united-states/texas-online-classes', [SiteController::class, 'texasOnlineClasses']);
Route::get('/united-states/chicago-online-classes', [SiteController::class, 'chicagoOnlineClasses']);
Route::get('/subjects/accounting-class-help', [SiteController::class, 'accountingClassHelp']);
Route::get('/subjects/algebra-class-help', [SiteController::class, 'algebraClassHelp']);
Route::get('/subjects/biology-class-help', [SiteController::class, 'biologyClassHelp']);
Route::get('/subjects/business-law-class-help', [SiteController::class, 'businessLawClassHelp']);
Route::get('/subjects/calculus-class-help', [SiteController::class, 'calculusClassHelp']);
Route::get('/subjects/chemistry-class-help', [SiteController::class, 'chemistryClassHelp']);
Route::get('/subjects/communication-class-help', [SiteController::class, 'communicationClassHelp']);
Route::get('/subjects/criminal-justice-class-help', [SiteController::class, 'criminalJusticeClassHelp']);
Route::get('/subjects/economics-class-help', [SiteController::class, 'economicsClassHelp']);
Route::get('/subjects/engineering-class-help', [SiteController::class, 'engineeringClassHelp']);
Route::get('/subjects/english-class-help', [SiteController::class, 'englishClassHelp']);
Route::get('/subjects/finance-class-help', [SiteController::class, 'financeClassHelp']);
Route::get('/subjects/geometry-class-help', [SiteController::class, 'geometryClassHelp']);
Route::get('/subjects/history-class-help', [SiteController::class, 'historyClassHelp']);
Route::get('/subjects/IT-class-help', [SiteController::class, 'ITClassHelp']);
Route::get('/subjects/management-class-help', [SiteController::class, 'managementClassHelp']);
Route::get('/subjects/marketing-class-help', [SiteController::class, 'marketingClassHelp']);
Route::get('/subjects/operations-management-class-help', [SiteController::class, 'operationsManagementClassHelp']);
Route::get('/subjects/philosophy-class-help', [SiteController::class, 'philosophyClassHelp']);
Route::get('/subjects/physics-class-help', [SiteController::class, 'physicsClassHelp']);
Route::get('/subjects/political-science-class-help', [SiteController::class, 'politicalScienceClassHelp']);
Route::get('/subjects/psychology-class-help', [SiteController::class, 'psychologyClassHelp']);
Route::get('/subjects/science-class-help', [SiteController::class, 'scienceClassHelp']);
Route::get('/subjects/sociology-class-help', [SiteController::class, 'sociologyClassHelp']);
Route::get('/subjects/spanish-class-help', [SiteController::class, 'spanishClassHelp']);
Route::get('/subjects/statistics-class-help', [SiteController::class, 'statisticsClassHelp']);
Route::get('/subjects/strategic-management-class-help', [SiteController::class, 'strategicManagementClassHelp']);
Route::get('/subjects/trigonometry-class-help', [SiteController::class, 'trigonometryClassHelp']);
Route::get('/terms-and-condition', [SiteController::class, 'termsAndCondition']);
Route::get('/privacy-policy', [SiteController::class, 'privacyPolicy']);
Route::get('/sitemap', [SiteController::class, 'sitemap']);
