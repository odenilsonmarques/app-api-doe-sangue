<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    DonorController,
    HistoricController,
    BloodCenterController
};
use App\Models\Historic;


//route to donors
Route::get('/donors/alls',[DonorController::class,'getAllDonors']);

Route::post('/donors',[DonorController::class,'createNewDonor']);

Route::get('/donors/{identify}', [DonorController::class, 'getDonorByUuid']);

Route::delete('/donors/{identify}', [DonorController::class, 'destroyDonorByUiid']);


//route boodcenter
Route::get('/bloodCenters/alls',[BloodCenterController::class, 'getAllBloodCenter']);

Route::post('/bloodCenters',[BloodCenterController::class, 'createNewBloodCenter']);



//route historic



Route::post('/donors/historics', [HistoricController::class, 'createHistoricForDonor']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
