<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObfuscationController;

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
Route::resource('obfuscate','ObfuscationController');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('obfuscate','ObfuscationController');
Route::get('obfuscate',[ObfuscationController::class ,'store']);
Route::get('/obfuscate',function(){
    return response()->json([
        'name'=>('body of the message'),
        'subject'=>'we are obfuscating tex',
        'body'=>'this is the body of the message'
    ]);
});
