<?php

use App\Http\Controllers\PdfDocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'showLatestNews']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('news', [NewsController::class, 'create']);
Route::get('newsinfo', [NewsController::class, 'index']);
Route::post('newscreate', [NewsController::class, 'store']);
Route::get('news/delete/{id}', [NewsController::class, 'destroy']);

Route::get('student', 'App\Http\Controllers\studentcontroller@create');
Route::get('students', 'App\Http\Controllers\studentcontroller@index');
Route::POST('studentcreate', 'App\Http\Controllers\studentcontroller@store');
Route::get('/students/delete/{id}', 'App\Http\Controllers\studentcontroller@destroy');
Route::get('/studentdoc/delete/{id}', 'App\Http\Controllers\studentcontroller@destroy01');
Route::get('supdate{id}', 'App\Http\Controllers\studentcontroller@edit');


Route::get('donar', 'App\Http\Controllers\donarcontroller@create');
Route::get('donars', 'App\Http\Controllers\donarcontroller@index');
Route::POST('donarcreate', 'App\Http\Controllers\donarcontroller@store');
Route::get('/donors/delete/{id}', 'App\Http\Controllers\donarcontroller@destroy');
Route::get('Donate', 'App\Http\Controllers\Donatecontroller@index');


Route::get('studentsinfo', 'App\Http\Controllers\welcomecontroller@index');
Route::get('package', 'App\Http\Controllers\packagecontroller@create');
Route::POST('packagecreate', 'App\Http\Controllers\packagecontroller@store');
Route::get('/packages/delete/{id}', 'App\Http\Controllers\packagecontroller@destroy');

Route::get('/get-student-documents', 'App\Http\Controllers\PdfDocumentController@getStudentDocuments');
Route::get('student-documents{id}', 'App\Http\Controllers\PdfDocumentController@index');
Route::post('/downloadSelectedDocuments', [PdfDocumentController::class, 'downloadSelectedDocuments'])->name('downloadSelectedDocuments');
Route::resource('pdf-documents', 'App\Http\Controllers\PdfDocumentController@destroy'::class);
Route::POST('filecreate', 'App\Http\Controllers\PdfDocumentController@store');
Route::get('document', 'App\Http\Controllers\PdfDocumentController@create');

Route::get('logout', 'App\Http\Controllers\Auth\RegisteredUserController@logout');

Route::POST('/download.pdf', 'App\Http\Controllers\DownloadController@downloadPDF');
Route::post('/download-zip', 'DownloadController@downloadZip')->name('download.zip');
Route::get('/contact', 'App\Http\Controllers\ContactController@showForm');
Route::get('/activity', 'App\Http\Controllers\NewsController@index');
Route::POST('/contactstore', 'App\Http\Controllers\contactController@save');
Route::get('/contacts', 'App\Http\Controllers\ContactController@showForm');
Route::get('/contacts/{id}','App\Http\Controllers\ContactController@showForm');
Route::put('/contacts/{id}', 'App\Http\Controllers\ContactController@showForm');
Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@showForm');

Route::get('event', 'App\Http\Controllers\eventcontroller@create');
Route::get('studmsg{id}', 'App\Http\Controllers\ContactController@showstudent');