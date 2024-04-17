<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    AuthController,
    DonorController,
    HistoricController,
    BloodCenterController,
    SchedulingController
};


// use App\Http\Controllers\Site\SiteController;
// use App\Models\Historic;
// use App\Models\Scheduling;
// use Illuminate\Console\Scheduling\Schedule;
// use Laravel\Telescope\Http\Controllers\ScheduleController;


//routes to user logged
// Route::post('/login', [AuthController::class, 'auth']);

// Route::get('/bloodcenters/alls', [BloodCenterController::class, 'getAllBloodCenter'])->name('bloodcenters.getAllBloodCenter');
// Route::post('/bloodcenters', [BloodCenterController::class, 'createNewBloodCenter'])->name('bloodcenters.storeNewBloodCenter');
// Route::get('/bloodcenters/create', [BloodCenterController::class, 'create'])->name('bloodcenters.create');



//route to donors
// Route::get('/donors/alls', [DonorController::class, 'getAllDonors'])->name('donors.getAllDonors');
// Route::post('/donors', [DonorController::class, 'storeNewDonor'])->name('donors.storeNewDonor');
// Route::get('/donors/create', [DonorController::class, 'create'])->name('donors.create');
// Route::get('/donors/{identify}', [DonorController::class, 'getDonorByUuid']);
// Route::delete('/donors/{identify}', [DonorController::class, 'destroyDonorByUiid']);

//route scheduling
// Route::get('/schedulings/alls', [SchedulingController::class, 'getAllScheduling'])->name('schedulings.getAllScheduling');
// Route::post('/schedulings', [SchedulingController::class, 'createNewScheduling'])->name('schedulings.createNewScheduling');
// Route::get('/schedulings/create', [SchedulingController::class, 'create'])->name('schedulings.create');


//route historic
// Route::get('/historics/alls', [HistoricController::class, 'getAllHistoric'])->name('historics.getAllHistoric');
// Route::post('/historics', [HistoricController::class, 'createNewHistoric'])->name('historics.createNewHistoric');
// Route::get('/historics/create', [HistoricController::class, 'create'])->name('historics.create');


    // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
