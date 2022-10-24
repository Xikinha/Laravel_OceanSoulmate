<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('home');
})->name('home');

Route::get('/take-action', function () {
    return view('action');
})->name('action');

// Route::get('/test', function () {
//     return view('dashboard');
// // })->middleware(['auth'])->name('dashboard');
// //To enable email verification for registration
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('test');

Route::post('/question1', [TestController::class, 'startTest'])->middleware(['auth', 'verified'])->name('question1');
Route::post('/question2', [TestController::class, 'createAnswers'])->middleware(['auth', 'verified'])->name('question2');
Route::post('/question3', [TestController::class, 'storeAnswer2'])->middleware(['auth', 'verified'])->name('question3');
Route::post('/question4', [TestController::class, 'storeAnswer3'])->middleware(['auth', 'verified'])->name('question4');
Route::post('/question5', [TestController::class, 'storeAnswer4'])->middleware(['auth', 'verified'])->name('question5');
Route::post('/question6', [TestController::class, 'storeAnswer5'])->middleware(['auth', 'verified'])->name('question6');
Route::post('/question7', [TestController::class, 'storeAnswer6'])->middleware(['auth', 'verified'])->name('question7');
Route::post('/question8', [TestController::class, 'storeAnswer7'])->middleware(['auth', 'verified'])->name('question8');
Route::post('/test-result', [TestController::class, 'storeAnswer8'])->middleware(['auth', 'verified'])->name('testResult');

require __DIR__.'/auth.php';
