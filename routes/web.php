<?php

use App\Http\Controllers\CuentaController;
use App\Http\Controllers\PaginaWebController;
use Illuminate\Support\Facades\Route;
Route::get('/',[PaginaWebController::class,'inicio'])->name('inicio');
Route::get('/ahorros',[PaginaWebController::class,'ahorros'])->name('ahorros');
Route::get('/creditos',[PaginaWebController::class,'creditos'])->name('creditos');
Route::get('/inversiones',[PaginaWebController::class,'inversiones'])->name('inversiones');
Route::get('/nosotros',[PaginaWebController::class,'nosotros'])->name('nosotros');
Route::get('/contacto',[PaginaWebController::class,'contacto'])->name('contacto');
Route::get('/descargar-solicitud-credito',[PaginaWebController::class,'descargarSolicitudCredito'])->name('descargarSolicitudCredito');
Route::get('/simulador-de-credito',[PaginaWebController::class,'simuladorCredito'])->name('simulador.credito');
Route::get('/confirmar-solicitud-de-credito',[PaginaWebController::class,'confirmarSolicitudCredito'])->name('simulador.confirmarSolicitudCredito');
Route::post('/enviar-solicitud-de-credito',[PaginaWebController::class,'enviarSolicitudCredito'])->name('simulador.enviarSolicitudCredito');
Route::get('/solicitud-de-credito',[PaginaWebController::class,'solicitudCredito'])->name('creditos.solicitudCredito');
Route::post('/enviar-formulario-de-credito',[PaginaWebController::class,'enviarFormularioCredito'])->name('creditos.enviarFormularioCredito');




