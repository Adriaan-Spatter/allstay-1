<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\LessonController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/


Route::middleware(['auth'])->group(function () {  

    Route::get('/', function () {
        return view('admin.index');
    });    

    Route::group(['middleware' => ['role:admin']], function () {
/*
 *  COMPANIES
*/
    //Index (show all instances)
    Route::get('/admin/company-manager', [CompanyController::class, 'index'])->name('readCompany');
    //Show (single instance)
    Route::get('/admin/company/{company}', [CompanyController::class, 'show'])->name('showCompany');
    //Create (form for creating module)
    Route::get('/admin/company-manager/create-company', [CompanyController::class, 'create'])->name('createCompany');
    //Store (store a new instance in database)
    Route::post('/admin/company-manager/store-company', [CompanyController::class, 'store'])->name('storeCompany');
    //Edit (form for editing existing module)
    Route::get('/admin/company-manager/{company}', [CompanyController::class, 'edit'])->name('editCompany');
    //Update (update existing database entry)
    Route::put('/admin/company-manager/{company}', [CompanyController::class, 'update'])->name('updateCompany');
    //Destroy
    Route::delete('/admin/company-manager/{company}', [CompanyController::class, 'destroy'])->name('deleteCompany');
/*
 *  MODULES
*/
    //Index (show all instances)
    Route::get('/admin/curriculum-manager', [ModuleController::class, 'index'])->name('readModule');
    //Show (single instance)
    Route::get('/admin/modules/{module}', [ModuleController::class, 'show'])->name('showModule');
    //Create (form for creating module)
    Route::get('/admin/module-manager/create-module', [ModuleController::class, 'create'])->name('createModule');
    //Store (store a new instance in database)
    Route::post('/admin/module-manager/store-module', [ModuleController::class, 'store'])->name('storeModule');
    //Edit (form for editing existing module)
    Route::get('/admin/module-manager/{module}', [ModuleController::class, 'edit'])->name('editModule');
    //Update (update existing database entry)
    Route::put('/admin/module-manager/{module}', [ModuleController::class, 'update'])->name('updateModule');
    //Destroy
    Route::delete('/admin/module-manager/{module}', [ModuleController::class, 'destroy'])->name('deleteModule');
    
/*
 *  LESSONS 
*/
    //Create (form for creating lesson)
    Route::get('/admin/lesson-builder/{module}/add-lesson', [LessonController::class, 'create'])->name('createLesson');
    //Store (store a new instance in database)
    Route::post('/admin/lesson-builder/store-lesson', [LessonController::class, 'store'])->name('storeLesson');
    //Edit (form for editing existing lesson)
    Route::get('/admin/lesson-builder/{lesson}', [LessonController::class, 'edit'])->name('editLesson');
    //Update (update existing database entry)
    Route::put('/admin/lesson-builder/{lesson}', [LessonController::class, 'update'])->name('updateLesson');
    //Destroy
    Route::delete('/admin/lesson-builder/{lesson}', [LessonController::class, 'destroy'])->name('deleteLesson');

/*
 *  QUESTIONS 
*/
    //Create (form for creating question)
    Route::get('/admin/lesson-builder/{module}/{lesson}/add-question', [QuestionController::class, 'create'])->name('createQuestion');
    //Store (store a new instance in database)
    Route::post('/admin/lesson-builder/store-question', [QuestionController::class, 'store'])->name('storeQuestion');
    //Edit (form for editing existing question)
    Route::get('/admin/lesson-builder/{question}', [QuestionController::class, 'edit'])->name('editQuestion');
    //Update (update existing database entry)
    Route::put('/admin/lesson-builder/{question}', [QuestionController::class, 'update'])->name('updateQuestion');
    //Destroy
    Route::delete('/admin/lesson-builder/{question}', [QuestionController::class, 'destroy'])->name('deleteQuestion');
    });
});
require __DIR__.'/auth.php';
