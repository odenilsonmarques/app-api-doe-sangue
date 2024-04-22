<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\{
    DonorController,
    HistoricController,
    BloodCenterController,
    SchedulingController
};
use App\Http\Controllers\Site\{
    SiteController,
};


Route::get('/', [SiteController::class, 'index'])->name('index');

// Route::get('/dashboard',[ControllerDashboard::class,'index'])->name('dashboard.index');


//route scheduling
Route::get('/schedulings/api/v1/alls', [SchedulingController::class, 'getAllScheduling'])->name('schedulings.getAllScheduling');
Route::post('/schedulings', [SchedulingController::class, 'createNewScheduling'])->name('schedulings.createNewScheduling');
Route::get('/schedulings/create', [SchedulingController::class, 'create'])->name('schedulings.create');

Route::get('/bloodcenters/api/v1/alls', [BloodCenterController::class, 'getAllBloodCenter'])->name('bloodcenters.getAllBloodCenter');
Route::post('/bloodcenters', [BloodCenterController::class, 'createNewBloodCenter'])->name('bloodcenters.storeNewBloodCenter');
Route::get('/bloodcenters/create', [BloodCenterController::class, 'create'])->name('bloodcenters.create');

Route::get('/historics/api/v1/alls', [HistoricController::class, 'getAllHistoric'])->name('historics.getAllHistoric');
Route::post('/historics', [HistoricController::class, 'createNewHistoric'])->name('historics.createNewHistoric');
Route::get('/historics/create', [HistoricController::class, 'create'])->name('historics.create');




// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
