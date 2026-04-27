<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;

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


Route::middleware(['web', 'auth:staff'])->group(function () {
    Route::get('/export-products', [ExportController::class, 'export'])->name('export.products');

    Route::get('/admin-tools', function () {
        return view('admin-tools');
    })->name('admin.tools');
});