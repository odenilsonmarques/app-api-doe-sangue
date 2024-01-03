<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    DonorController,
};


Route::get('/donors/alls',[DonorController::class,'getAllDonors']);

Route::post('/donors',[DonorController::class,'store']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
