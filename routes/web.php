<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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
    return view('contents.index');
});

Route::get('crud', [CrudController::class, 'index'])->name('curd.index');

Route::group(['prefix' => 'student'], function () {
    Route::get('', [CrudController::class, 'index'])->name('student.index');           // 一覧
    Route::get('new', [CrudController::class, 'create'])->name('student.create');     // 入力
    Route::patch('new',[CrudController::class, 'confirm'])->name('student.confirm'); // 確認
    Route::post('new', [CrudController::class, 'store'])->name('student.store');    // 完了
});