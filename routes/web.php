<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use App\Mail\NotifyCreatedAccount;

Route::get('/', function () {
    return view('welcome');
})->middleware('checkmaintenance');


Route::middleware(['web'])->group(function () {
    // Verify email created account
    Auth::routes([
        'verify' => true
    ]);
    
    // Xác thực login tài khoản mưới được sử dụng chức năng
    Route::middleware(['auth'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('add-product', [ProductController::class, 'index_add_product']);
        Route::get('list-product', [ProductController::class, 'list_product']);
        Route::get('update-product', [ProductController::class, 'update_product']);
        Route::get('detail-product', [ProductController::class, 'detail_product']);
    });
    // Mail::to(('cuocsongquanhta28@gmail.com'))->send(new NotifyCreatedAccount());
});
