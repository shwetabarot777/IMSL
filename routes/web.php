<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IeController;

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
    return view('products.index');
    //return view('welcome');
});

Route::resource('products', ProductController::class);

Route::resource('forms', FormsController::class);

Route::get('importExportView', [IeController::class, 'importExportView']);

Route::get('export', [IeController::class, 'export'])->name('export');

Route::post('import', [IeController::class, 'import'])->name('import');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});