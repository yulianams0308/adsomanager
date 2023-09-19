<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\DatasheetController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Competence;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    
    Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('rooms/create', [RoomController::class, 'create']);
    

    Route::get('competences', [CompetenceController::class, 'index'])->name('competences.index');
    Route::post('competences', [CompetenceController::class, 'store'])->name('competences.store');
    Route::get('competences/create', [CompetenceController::class, 'create']);

    Route::get('datasheets', [DatasheetController::class, 'index'])->name('datasheets.index');
    Route::post('datasheets', [DatasheetController::class, 'store'])->name('datasheets.store');
    Route::get('datasheets/create', [DatasheetController::class, 'create']);

    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/create', [RoleController::class, 'create']);

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/create', [UserController::class, 'create']);

    Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentices.index');
    Route::post('apprentices', [ApprenticeController::class, 'store'])->name('apprentices.store');
    Route::get('apprentices/create', [ApprenticeController::class, 'create']);

    Route::get('instructors', [InstructorController::class, 'index'])->name('instructors.index');
    Route::post('instructors', [InstructorController::class, 'store'])->name('instructors.store');
    Route::get('instructors/create', [InstructorController::class, 'create']);

    Route::get('sessions', [SessionController::class, 'index'])->name('sessions.index');
    Route::post('sessions', [SessionController::class, 'store'])->name('sessions.store');
    Route::get('sessions/create', [SessionController::class, 'create']);

    Route::get('attendances', [AttendanceController::class, 'index'])->name('attendances.index');
    Route::post('attendances', [AttendanceController::class, 'store'])->name('attendances.store');
    Route::get('attendances/create', [AttendanceController::class, 'create']);

    
    // Route::resource('apprendice', ApprenticeController::class);
    // Route::resource('attendance', AttendanceController::class);
    // Route::resource('competence', CompetenceController::class);
    // Route::resource('datasheet', DatasheetController::class);
    // Route::resource('image', ImageController::class);
    // Route::resource('instructor', InstructorController::class);
    // Route::resource('resultado', ResultController::class);
    // Route::resource('role', RoleController::class);
    // Route::resource('room', RoomController::class);
    // Route::resource('Session', SessionController::class);
    


