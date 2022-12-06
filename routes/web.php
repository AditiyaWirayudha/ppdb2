<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    SiswaController,
    JurusanController,
    UserController,
    SettingController,
    ProfileController
};

Route::get('/', function () {
    return view('home.welcome');
});

// Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/simpanRegister', [AuthController::class, 'simpanRegister'])->name('simpanRegister');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 

// Route Siswa
Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
Route::resource('/siswa', SiswaController::class);

// Route Jurusan
Route::get('/jurusan/data', [JurusanController::class, 'data'])->name('jurusan.data');
Route::resource('/jurusan', JurusanController::class);

//Route Profil
Route::get('/user', [UserController::class, 'index'])->name('user.index');    

// Route PRINT
Route::get('/siswa/pdf/{id}', [SiswaController::class, 'pdf'])->name('siswa.pdf');

// route Setting
Route::get('/setiing', [SettingController::class, 'index'])->name('setting.index');   

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');    