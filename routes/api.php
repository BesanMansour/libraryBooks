<?php

use App\Http\Controllers\AccessTokenController;
use App\Http\Controllers\Api\ManageApiController;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::get('books/index', [ApiController::class, 'getBook']);
Route::get('get-book/{id}', [ApiController::class, 'getBookId']);
Route::delete('delete-book/{book}', [ApiController::class, 'deleteBook']);
Route::post('store/book', [ApiController::class, 'storeBook'])
            ->middleware('auth:sanctum');
Route::post('update/book/{id}',[ApiController::class,'updateBook']);


Route::post('admin/store',[AccessTokenController::class,'store']);
Route::delete('admin/delete/{token?}', [AccessTokenController::class,'destroy'])
    ->middleware('auth:sanctum');


