<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

Route::group(['prefix' => 'tasks', 'middleware' => 'auth'], function() {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/{id}', [TaskController::class, 'show'])
        ->name('tasks.show')
        ->where('id', '[0-9]+');
    Route::get('create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('edit/{id}', [TaskController::class, 'edit'])
        ->name('tasks.edit')
        ->where('id', '[0-9]+');
    Route::post('update/{id}', [TaskController::class, 'update'])
        ->name('tasks.update')
        ->where('id', '[0-9]+');
    Route::delete('delete/{id}', [TaskController::class, 'destroy'])
        ->name('tasks.delete')
        ->where('id', '[0-9]+');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
