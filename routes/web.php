<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return response()->json([
//         'status' => 'success',
//         'message' => 'Laravel is running properly!'
//     ]);
// });

// 그리드 페이지 라우트
Route::get('/test', [TestController::class, 'index'])->name('test.index');  

// 데이터를 JSON 형식으로 반환하는 라우트
Route::get('/test/data', [TestController::class, 'getData'])->name('test.data');

// 새로운 데이터 조회 라우트
Route::get('/test/data2', [TestController::class, 'getData2'])->name('test.data2');