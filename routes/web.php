<?php

use App\Http\Controllers\CuentaController;
use App\Http\Controllers\PaginaWebController;
use Illuminate\Support\Facades\Route;
Route::get('/',[PaginaWebController::class,'inicio'])->name('inicio');
Route::get('/ahorros',[PaginaWebController::class,'ahorros'])->name('ahorros');
Route::get('/creditos',[PaginaWebController::class,'creditos'])->name('creditos');
Route::get('/inversiones',[PaginaWebController::class,'inversiones'])->name('inversiones');
Route::get('/simulador',[PaginaWebController::class,'ahorros'])->name('simulador');
Route::get('/nosotros',[PaginaWebController::class,'nosotros'])->name('nosotros');
Route::get('/contacto',[PaginaWebController::class,'contacto'])->name('contacto');
Route::get('/certificados-financieros',[PaginaWebController::class,'contacto'])->name('contacto');



