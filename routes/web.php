<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductControllerAdmin;
use App\Http\Controllers\User\ControllerUser;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Admin\CategoryController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('post-login', [AuthenticationController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('post-register', [AuthenticationController::class, 'postRegister'])->name('postRegister');

// sản phẩm admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function(){

    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function(){
        Route::get('/', [ProductControllerAdmin::class, 'listProductAdmin'])->name('listProductAdmin');
        Route::get('add-product', [ProductControllerAdmin::class, 'addProduct'])->name('addProduct');
        Route::post('add-product', [ProductControllerAdmin::class, 'addPostProduct'])->name('addPostProduct');
        Route::delete('delete-product', [ProductControllerAdmin::class, 'deleteProduct'])->name('deleteProduct');
        Route::get('detail-product/{idProduct}', [ProductControllerAdmin::class, 'detailProduct'])->name('detailProduct');
        Route::get('update-product/{idProduct}', [ProductControllerAdmin::class, 'updateProduct'])->name('updateProduct');
        Route::patch('update-product/{idProduct}', [ProductControllerAdmin::class, 'updatePatchProduct'])->name('updatePatchProduct');
    });
});

// thể loại sản phẩm admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function(){
    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.'
    ], function(){
        Route::get('/', [CategoryController::class, 'listCategoryAdmin'])->name('listCategoryAdmin');
        Route::get('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
        Route::post('add-category', [CategoryController::class, 'addPostCategory'])->name('addPostCategory');
        Route::delete('delete-category', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
        Route::get('update-category/{idCategory}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::patch('update-category/{idCategory}', [CategoryController::class, 'updatePatchCategory'])->name('updatePatchCategory');
    });
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.'
], function(){
    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function(){
        Route::get('/', [ControllerUser::class, 'listProductUser'])->name('listProductUser');

    });
});
