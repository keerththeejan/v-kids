<?php

use App\Http\Controllers\PdfDocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', [NewsController::class, 'showLatestNews']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('news', [NewsController::class, 'create']);
Route::get('newsinfo', [NewsController::class, 'index']);
Route::post('newscreate', [NewsController::class, 'store']);
Route::get('news/delete/{id}', [NewsController::class, 'destroy']);

Route::get('student', [StudentController::class, 'create']);
Route::get('students', [StudentController::class, 'index']);
Route::post('studentcreate', [StudentController::class, 'store']);
Route::get('students/delete/{id}', [StudentController::class, 'destroy']);
Route::get('supdate/{id}', [StudentController::class, 'edit']);

Route::get('donar', [DonarController::class, 'create']);
Route::get('donars', [DonarController::class, 'index']);
Route::post('donarcreate', [DonarController::class, 'store']);
Route::get('donors/delete/{id}', [DonarController::class, 'destroy']);

Route::get('Donate', [DonateController::class, 'index']);

Route::get('studentsinfo', [WelcomeController::class, 'index']);

Route::get('package', [PackageController::class, 'create']);
Route::post('packagecreate', [PackageController::class, 'store']);
Route::get('packages/delete/{id}', [PackageController::class, 'destroy']);

Route::resource('pdf-documents', PdfDocumentController::class)->only([
    'destroy'
]);

Route::get('get-student-documents', [PdfDocumentController::class, 'getStudentDocuments']);
Route::get('student-documents/{id}', [PdfDocumentController::class, 'index']);
Route::post('download-selected-documents', [PdfDocumentController::class, 'downloadSelectedDocuments'])
    ->name('downloadSelectedDocuments');

Route::get('logout', [RegisteredUserController::class, 'logout']);
