<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [LoginController::class, 'index']);

Route::group(
    ['prefix'=>'admin/','middleware'=>'auth'],function(){
        Route::get('/',[AdminController::class,'admin'])->name('admin');
    } 
);

Auth::routes(['register' => false]);




Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::resource('products', ProductController::class);

Route::get('products.list', [ProductController::class, 'getProducts'])->name('products.list');


Route::resource('forms', FormsController::class);

Route::get('importExportView', [IeController::class, 'importExportView']);

Route::get('export', [IeController::class, 'export'])->name('export');

Route::post('import', [IeController::class, 'import'])->name('import');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from Shweta ',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});

Route::get('imagelist/{p_id}', [ ProductController::class, 'imagelist' ])->name('products.images.index');
Route::get('uploadimages', [ ProductController::class, 'imageupload' ])->name('products.images.create');
Route::post('storeimages', [ ProductController::class, 'storeimages' ])->name('products.storeimages');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
