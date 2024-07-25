<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ConsultaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar-nombres-usuarios', [ConsultaController::class, 'listarNombresUsuarios']);
Route::get('/saldo-maximo-mujeres', [ConsultaController::class, 'saldoMaximoMujeres']);
Route::get('/nombre-telefono', [ConsultaController::class, 'nombreTelefono']);
Route::get('/contar-usuarios', [ConsultaController::class, 'contarUsuarioSinSaldo']);
Route::get('/telefono-saldo-menor', [ConsultaController::class, 'numerosTelefonosSaldoMenor300']);
Route::get('/login-usuario', [ConsultaController::class, 'loginUsuariosNivel']);
Route::get('/suma-saldos-nextel', [ConsultaController::class, 'sumaSaldoNextel']);
Route::get('/contar-usuarios-comp', [ConsultaController::class, 'contarUsuarioComp']);
Route::get('/contar-usuarios-nivel', [ConsultaController::class, 'contarUsuarioNivel']);
Route::get('/login-nivel-2', [ConsultaController::class, 'listarUsuariosNivel2']);
Route::get('/usuarios-gmail', [ConsultaController::class, 'mostrarUsuarioGmail']);
Route::get('/nombre-telefono2', [ConsultaController::class, 'nombreTelefonoLG']);
Route::get('/nombre-telefono-no', [ConsultaController::class, 'nombreTelefonoNo']);
Route::get('/nombre-telefono-comp', [ConsultaController::class, 'nombreCompIusacell']);
Route::get('/nombre-telefono-comp-no', [ConsultaController::class, 'nombreTelefonoNoTelcel']);
Route::get('/saldo-promedio-nokia', [ConsultaController::class, 'saldoPromedioNokia']);
Route::get('/nombre-telefono-comp-iua', [ConsultaController::class, 'nombreTelefonoCompIUAoAXEL']);
Route::get('/nombre-usuarios-no-yahoo', [ConsultaController::class, 'mostrarUsuarioNoYahoo']);
Route::get('/nombre-telefono-comp-no-iua', [ConsultaController::class, 'nombreTelefonoCompNoIUAoTel']);
Route::get('/nombre-telefono-comp-une', [ConsultaController::class, 'nombreTelefonoCompUne']);
Route::get('/marca-descendente', [ConsultaController::class, 'listarMarcasAlfabeticoDesc']);
Route::get('/comp-orden-aleatorio', [ConsultaController::class, 'listarCompOrdenAlfAlea']);
Route::get('/usuario-nivel-02', [ConsultaController::class, 'usuariosNivel02']);
Route::get('/saldo-promedio-lg', [ConsultaController::class, 'saldoPromedioLG']);
Route::get('/usuario-nivel-13', [ConsultaController::class, 'usuariosNivel13']);
Route::get('/nombre-telefono-no-berry', [ConsultaController::class, 'nombreTelefonoMarcaNoBlack']);
Route::get('/usuario-nivel-3', [ConsultaController::class, 'usuariosNivel3']);
Route::get('/usuario-nivel-0', [ConsultaController::class, 'usuariosNivel0']);
Route::get('/usuario-nivel-1', [ConsultaController::class, 'usuariosNivel1']);
Route::get('/usuario-sexo', [ConsultaController::class, 'contarUsuarioSexo']);
Route::get('/nombre-telefono-at', [ConsultaController::class, 'nombreTelefonoCompAT']);
Route::get('/comp-descendente', [ConsultaController::class, 'listarCompOrdenDesc']);
Route::get('/usuario-inactivo', [ConsultaController::class, 'listarUsuariosInactivos']);
Route::get('/usuario-sin-saldo', [ConsultaController::class, 'listarUsuariosSinSaldo']);
Route::get('/saldo-minimo-hombres', [ConsultaController::class, 'saldoMinimoHombres']);
Route::get('/telefono-saldo-mayor', [ConsultaController::class, 'numerosTelefonosSaldoMayor300']);
Route::get('/contar-uusario-marca', [ConsultaController::class, 'contarUsuarioMarcaTelefono']);
Route::get('/telefono-no-lg', [ConsultaController::class, 'nombreTelefonoNoLG']);
Route::get('/comp-asc', [ConsultaController::class, 'listarCompOrdenAsc']);
Route::get('/suma-saldo-unefon', [ConsultaController::class, 'sumaSaldoUnefon']);
Route::get('/usuario-hotmail', [ConsultaController::class, 'mostrarUsuarioHotmail']);
Route::get('/contar-usuarios-sin', [ConsultaController::class, 'contarUsuarioSinSaldo2']);
Route::get('/nombre-usuario-iua-tel', [ConsultaController::class, 'usuarioTelefonoCompIuaTel']);
Route::get('/marcas-asc', [ConsultaController::class, 'listarMarcasAsc']);
Route::get('/marca-aleatoria', [ConsultaController::class, 'listarMarcasOrdenAlfAlea']);
Route::get('/nombre-usuario-iua-une', [ConsultaController::class, 'nombreUsuarioCompIuaUne']);
Route::get('/nombre-telefono-no-mot-nokia', [ConsultaController::class, 'nombreTelefonoNoMotorolaNokia']);
Route::get('/suma-telcel', [ConsultaController::class, 'sumaSaldoTelcel']);