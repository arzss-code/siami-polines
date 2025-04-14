<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodeAuditController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('periode_audit', function () {
    return view('period-audit2');
});

Route::get('periode-audit2', function () {
    return view('period-audit2');
});

// Route::get('periode-audit', function () {
//     return view('periode-audit');
// });

// // Untuk route resource (CRUD lengkap)
// Route::resource('periode-audit', PeriodeAuditController::class);

// // Atau jika hanya butuh index
// Route::get('/periode-audit', [PeriodeAuditController::class, 'index'])->name('periode-audit.index');
