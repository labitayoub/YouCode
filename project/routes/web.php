<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\QuestionController;



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
    return view('welcome');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
Route::get('/candidat/dashboard', [CandidatController::class, 'index'])->name('candidat.dashboard');
Route::resource('questions', QuestionController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::fallback(function () {
    return "Page non trouvée !";
});




require __DIR__.'/auth.php';
