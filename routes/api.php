<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    DonorController,
    HistoricController,
};
use App\Models\Historic;

Route::get('/donors/alls',[DonorController::class,'getAllDonors']);

Route::post('/donors',[DonorController::class,'createNewDonor']);

Route::get('/donors/{identify}', [DonorController::class, 'getDonorByUuid']);

Route::delete('/donors/{identify}', [DonorController::class, 'destroyDonorByUiid']);


Route::post('/donors/{donorUuid}/historics', [HistoricController::class, 'createHistoricForDonor']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
