<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\Admin\Fleet\FleetDashboardController;
use App\Http\Controllers\Admin\Fleet\FleetVehicleController;
use App\Http\Controllers\Admin\Fleet\FleetDriverController;
use App\Http\Controllers\Admin\Fleet\FleetFuelLogController;
use App\Http\Controllers\Admin\Fleet\FleetMaintenanceController;
use App\Http\Controllers\Admin\Fleet\FleetDocumentController;
use App\Http\Controllers\Admin\Fleet\FleetTripController;
use App\Http\Controllers\Admin\Fleet\FleetExpenseController;
use App\Http\Controllers\Admin\Fleet\FleetReportController;
use App\Http\Controllers\Admin\Fleet\FleetSettingController;
use App\Http\Controllers\Admin\Fleet\FleetTyreBatteryController;
use App\Http\Controllers\Admin\Fleet\FleetIncidentController;
use App\Http\Controllers\Admin\Fleet\FleetChallanController;

Route::middleware(['auth'])->prefix('admin/fleet')->name('admin.fleet.')->group(function () {
    Route::get('/', [FleetDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [FleetDashboardController::class, 'index'])->name('dashboard.alias');
    Route::resource('vehicles', FleetVehicleController::class);
    Route::resource('drivers', FleetDriverController::class);
    Route::resource('fuel', FleetFuelLogController::class);
    Route::resource('maintenance', FleetMaintenanceController::class);
    Route::resource('documents', FleetDocumentController::class);
    Route::resource('trips', FleetTripController::class);
    Route::get('expenses', [FleetExpenseController::class, 'index'])->name('expenses.index');
    Route::get('reports', [FleetReportController::class, 'index'])->name('reports.index');
    Route::get('settings', [FleetSettingController::class, 'index'])->name('settings.index');
    Route::resource('tyres-batteries', FleetTyreBatteryController::class);
    Route::resource('incidents', FleetIncidentController::class);
    Route::resource('challans', FleetChallanController::class);
});
