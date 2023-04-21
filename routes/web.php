<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AuthController;

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

Route::get('/alan', function () {
    return view('app');
});

// 用户登录页面路由
Route::get('admin/login', [LoginController::class, 'login']);

// 获取验证码路由
Route::get('admin/getCaptcha', [AuthController::class, 'getCaptcha']);
