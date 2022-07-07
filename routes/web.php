<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/



//Route::middleware(['auth'])->group(function () {  
/*
 *  MODULES
*/
    //Index (show all instances)
    Route::get('/admin/module-manager', [ModuleController::class, 'index'])->name('readModule');
    //Show (single instance)
    Route::get('/admin/modules/{module}', [ModuleController::class, 'show'])->name('showModule');
    //Create (form for creating module)
    Route::get('/admin/module-manager/create', [ModuleController::class, 'create'])->name('createModule');
    //Store (store a new instance in database)
    Route::post('/admin/module-manager/store', [ModuleController::class, 'store'])->name('storeModule');
    //Edit (form for editing existing module)
    Route::get('/admin/module-manager/{module}', [ModuleController::class, 'edit'])->name('editModule');
    //Update (update existing database entry)
    Route::put('/admin/module-manager/{module}', [ModuleController::class, 'update'])->name('updateModule');
    //Destroy
    Route::delete('/admin/module-manager/{module}', [ModuleController::class, 'destroy'])->name('deleteModule');
    
//});

require __DIR__.'/auth.php';
