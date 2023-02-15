<?php

use App\Http\Controllers\FileImportController;
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

Route::get('/', function () {
    // return view('welcome');
    // redirect('importExportView');
    return redirect('importExportView');
});

Route::get('importExportView',[FileImportController::class,'importExportView']);
Route::get('export',[FileImportController::class,'export'])->name('export');
Route::post('import',[FileImportController::class,'import'])->name('import');
Route::get('emailView',[FileImportController::class,'emailView'])->name('emailView');

