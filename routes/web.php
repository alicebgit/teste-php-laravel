<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', [DocumentsController::class, 'upload'])->name('upload');

//faz chamada para fila no docker
Route::post('/queue', function (Carbon $carbon) {
    $command = 'docker exec php-laravel.test-1 php ' . base_path('artisan') . ' queue:work --stop-when-empty';
    exec($command);

    return view('welcome');
})->name('queue');
