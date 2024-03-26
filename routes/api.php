<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    DonorController,
    HistoricController,
    BloodCenterController,
    SchedulingController
  
};

use App\Http\Controllers\Api\{
   
    LoginController
};

use App\Http\Controllers\Site\SiteController;

use App\Models\Historic;
use App\Models\Scheduling;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Telescope\Http\Controllers\ScheduleController;




    //route to donors
    Route::get('/donors/alls', [DonorController::class, 'getAllDonors'])->name('donors.getAllDonors');
    Route::post('/donors', [DonorController::class, 'storeNewDonor'])->name('donors.storeNewDonor');
    Route::get('/donors/create', [DonorController::class, 'create'])->name('donors.create');
    Route::get('/donors/{identify}', [DonorController::class, 'getDonorByUuid']);
    Route::delete('/donors/{identify}', [DonorController::class, 'destroyDonorByUiid']);


    //route boodcenter. depois alterar o name da rota para o padrao como donos
    Route::get('/bloodcenters/alls', [BloodCenterController::class, 'getAllBloodCenter'])->name('bloodcenters.getAllBloodCenter')->middleware('auth:api');
    Route::post('/bloodcenters', [BloodCenterController::class, 'createNewBloodCenter'])->name('bloodcenters.storeNewBloodCenter')->middleware('auth:api');
    Route::get('/bloodcenters/create', [BloodCenterController::class, 'create'])->name('bloodcenters.create')->middleware('auth:api');


    //route scheduling
    Route::get('/schedulings/alls', [SchedulingController::class, 'getAllScheduling'])->name('schedulings.getAllScheduling');
    Route::post('/schedulings', [SchedulingController::class, 'createNewScheduling'])->name('schedulings.createNewScheduling');
    Route::get('/schedulings/create', [SchedulingController::class, 'create'])->name('schedulings.create');


    //route historic
    Route::get('/historics/alls', [HistoricController::class, 'getAllHistoric'])->name('historics.getAllHistoric');
    Route::post('/historics', [HistoricController::class, 'createNewHistoric'])->name('historics.createNewHistoric');
    Route::get('/historics/create', [HistoricController::class, 'create'])->name('historics.create');


    Route::post('/login', [LoginController::class, 'login']);
    // Route::post('/login', [UserController::class, 'login']);


    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

