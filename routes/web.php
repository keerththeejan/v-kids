<?php

use App\Http\Controllers\PdfDocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
Route::get('/','App\Http\Controllers\Newscontroller@showLatestNews');
Route::get('student', 'App\Http\Controllers\studentcontroller@create');
Route::get('donar', 'App\Http\Controllers\donarcontroller@create');
Route::get('document', 'App\Http\Controllers\PdfDocumentController@create');
Route::get('donars', 'App\Http\Controllers\donarcontroller@index');
Route::get('Donate', 'App\Http\Controllers\Donatecontroller@index');
Route::get('students', 'App\Http\Controllers\studentcontroller@index');
Route::get('studentsinfo', 'App\Http\Controllers\welcomecontroller@index');
Route::POST('studentcreate', 'App\Http\Controllers\studentcontroller@store');
Route::POST('filecreate', 'App\Http\Controllers\PdfDocumentController@store');
Route::POST('donarcreate', 'App\Http\Controllers\donarcontroller@store');
Route::get('/donors/delete/{id}', 'App\Http\Controllers\donarcontroller@destroy');
Route::get('/students/delete/{id}', 'App\Http\Controllers\studentcontroller@destroy');
Route::get('supdate{id}', 'App\Http\Controllers\studentcontroller@edit');
Route::resource('pdf-documents', 'App\Http\Controllers\PdfDocumentController@destroy'::class);
Route::get('news', 'App\Http\Controllers\Newscontroller@create');
Route::get('newsinfo', 'App\Http\Controllers\Newscontroller@index');
Route::POST('newscreate', 'App\Http\Controllers\Nwwscontroller@store');
Route::get('/news/delete/{id}', 'App\Http\Controllers\Newscontroller@destroy');
Route::get('package', 'App\Http\Controllers\packagecontroller@create');
Route::POST('packagecreate', 'App\Http\Controllers\packagecontroller@store');
Route::get('/packages/delete/{id}', 'App\Http\Controllers\packagecontroller@destroy');
Route::get('logout', 'App\Http\Controllers\Auth\RegisteredUserController@logout');
Route::get('/get-student-documents', 'App\Http\Controllers\PdfDocumentController@getStudentDocuments');
Route::get('student-documents{id}', 'App\Http\Controllers\PdfDocumentController@index');
Route::post('/download-selected-documents', [PdfDocumentController::class, 'downloadSelectedDocuments'])->name('downloadSelectedDocuments');




