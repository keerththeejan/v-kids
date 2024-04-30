<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PdfDocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\welcomeController;

Route::get('/', [NewsController::class, 'showLatestNews']);
Route::get('/dashboard', [welcomeController::class, 'dashboard']);


require __DIR__.'/auth.php';

Route::get('news', [NewsController::class, 'create']);
Route::get('newsinfo', [NewsController::class, 'index']);
Route::get('newses', [NewsController::class, 'index1']);
Route::post('newscreate', [NewsController::class, 'store']);
Route::get('news/delete/{id}', [NewsController::class, 'destroy']);

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.index');
Route::get('/msg{id}', [ContactController::class, 'edit']);


Route::get('student', 'App\Http\Controllers\studentcontroller@create');
Route::get('students', 'App\Http\Controllers\studentcontroller@index');
Route::POST('studentcreate', 'App\Http\Controllers\studentcontroller@store');
Route::POST('stupdate', 'App\Http\Controllers\studentcontroller@update');
Route::get('/students/delete/{id}', 'App\Http\Controllers\studentcontroller@destroy');
Route::get('/studentdoc/delete/{id}', 'App\Http\Controllers\PdfDocumentController@destroy');
Route::get('supdate{id}', 'App\Http\Controllers\studentcontroller@edit');


Route::get('donar', 'App\Http\Controllers\donarcontroller@create');
Route::get('edit{id}', 'App\Http\Controllers\donarcontroller@edit');
Route::get('donation', 'App\Http\Controllers\donarcontroller@createdonation');
Route::get('donars', 'App\Http\Controllers\donarcontroller@index');
Route::POST('donarcreate', 'App\Http\Controllers\donarcontroller@store');
Route::POST('donarupdate', 'App\Http\Controllers\donarcontroller@update');
Route::get('/donors/delete/{id}', 'App\Http\Controllers\donarcontroller@destroy');
Route::get('Donate', 'App\Http\Controllers\Donatecontroller@index');

Route::get('/studentsinfo', [welcomeController::class, 'index']);
Route::get('/package', [packageController::class, 'create']);
Route::POST('/packagecreate', [packageController::class, 'store']);
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
Route::get('/activity', 'App\Http\Controllers\NewsController@index');
Route::POST('/contactstore', 'App\Http\Controllers\contactController@save');
Route::POST('/smsg', 'App\Http\Controllers\contactController@smsgsave');

Route::get('/contacts', 'App\Http\Controllers\ContactController@showForm');
Route::get('/contacts/{id}','App\Http\Controllers\ContactController@showForm');
Route::put('/contacts/{id}', 'App\Http\Controllers\ContactController@showForm');
Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@showForm');

Route::get('event', 'App\Http\Controllers\eventcontroller@create');
Route::get('studmsg{id}', [ContactController::class, 'showstudent']);

Route::get('messages', 'App\Http\Controllers\ContactController@index1');
