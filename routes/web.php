<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\controllers\QuestionController;
use App\Http\controllers\HomeController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{farrel}', function ($farrel) {
    return 'Nama saya: '.$farrel;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301075') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home',[HomeController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

route::get('/home-question-respon', function() {
    return view('home-question-respon');
})->name('home-question-respon');

route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

route::resource('pelanggan', PelangganController::class);

