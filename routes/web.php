<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
       
       
        Route::get('/importExportView', [IeController::class, 'importExportView'])->name('importExportView');
        Route::get('send-mail', function () {

            $details = [
                'title' => 'Mail from Shweta ',
                'body' => 'This is for testing email using smtp'
            ];

            \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));

            dd("Email is Sent.");
        })->name('send-mail');

         Route::get('/products', [ProductController::class, 'index'])->name('products');

          Route::get('products.list', [ProductController::class, 'getProducts'])->name('products.list');

        Route::get('admin.products.create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::any('admin.products.store', [ProductController::class, 'store'])->name('admin.products.store');

        Route::any('admin.products.edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::get('admin.products.update', [ProductController::class, 'update'])->name('admin.products.update');

      
        Route::get('admin.products.show/{id}', [ProductController::class, 'show'])->name('admin.products.show');
        
        Route::get('admin.products.destroy/{p_id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
        Route::get('products.images.index/{p_id}', [ProductController::class, 'imagelist'])->name('products.images.index');
         Route::get('uploadimages', [ ProductController::class, 'imageupload' ])->name('products.images.create');
        Route::post('storeimages', [ ProductController::class, 'storeimages' ])->name('products.storeimages');
        Route::any('admin.categories.create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::get('admin.categories.index', [CategoryController::class, 'allCategories'])->name('admin.categories.index');

        Route::any('admin.categories.edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.categories.edit');
        Route::any('admin.categories.delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.categories.delete');


       /* Route::get('/contact', [HomeController::class, 'contact'])->name('contact');


        
        Route::get('forms', FormsController::class, 'index')->name('forms');

        Route::get('export', [IeController::class, 'export'])->name('export');

        Route::post('import', [IeController::class, 'import'])->name('import');

        Route::get('imagelist/{p_id}', [ ProductController::class, 'imagelist' ])->name('products.images.index');
       

*/

    } 
);

Auth::routes(['register' => false]);



Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
