<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    DonorController,
    HistoricController,
    BloodCenterController,
    SchedulingController
};

use App\Models\Historic;
use App\Models\Scheduling;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Telescope\Http\Controllers\ScheduleController;

//route to donors
Route::get('/donors/alls',[DonorController::class,'getAllDonors'])->name('donors.getAllDonors');
Route::post('/donors',[DonorController::class,'storeNewDonor'])->name('donors.storeNewDonor');
Route::get('/donors/create',[DonorController::class,'create'])->name('donors.create');
Route::get('/donors/{identify}', [DonorController::class,'getDonorByUuid']);
Route::delete('/donors/{identify}', [DonorController::class,'destroyDonorByUiid']);


//route boodcenter. depois alterar o name da rota para o padrao como donos
Route::get('/bloodcenters/alls',[BloodCenterController::class,'getAllBloodCenter'])->name('bloodcenters.getAllBloodCenter');
Route::post('/bloodcenters',[BloodCenterController::class,'createNewBloodCenter'])->name('bloodcenters.storeNewBloodCenter');
Route::get('/bloodcenters/create',[BloodCenterController::class,'create'])->name('bloodcenters.create');


//route scheduling
Route::get('/schedulings/alls',[SchedulingController::class,'getAllScheduling'])->name('schedulings.getAllScheduling');
Route::post('/schedulings',[SchedulingController::class,'createNewScheduling'])->name('schedulings.createNewScheduling');
Route::get('/schedulings/create',[SchedulingController::class,'create'])->name('schedulings.create');



//route historic
Route::post('/donors/historics',[HistoricController::class,'createHistoricForDonor']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
