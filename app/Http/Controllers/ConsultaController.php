<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    //
    public function listarNombresUsuarios(){
        $usuarios = Usuario::select('nombre')->get();
        return view('listar_nombres', compact('usuarios'));
    }

    public function saldoMaximoMujeres(){
        $saldoMaximo = Usuario::where('sexo', 'M')->max('saldo');
        return view('saldo_maximo_mujeres', compact('saldoMaximo'));
    }

    public function nombreTelefono(){
        $usuarios = Usuario::whereIn('marca', ['NOKIA', 'BLACKBERRY', 'SONY'])
        ->select('nombre', 'telefono', 'marca')
        ->get();
        return view('nombre_telefono_nokia_sony', compact('usuarios'));
    }

    public function contarUsuarioSinSaldo(){
        $usuariosCount = Usuario::where('saldo', 0)->orWhere('activo', 0)->count();
        return view('contar_usuario_sin_saldo', compact('usuariosCount'));
    }

    public function loginUsuariosNivel(){
        $usuarios = Usuario::whereIn('nivel', [1, 2, 3])
        ->select('nombre', 'nivel')
        ->get();
        return view('login_usuario', compact('usuarios'));
    }

    public function numerosTelefonosSaldoMenor300(){
        $usuarios = Usuario::where('saldo', '<=', 300)
        ->select('telefono', 'saldo')
        ->get();
        return view('telefoni_saldo_menor', compact('usuarios'));
    }
          
    public function sumaSaldoNextel(){
        $sumaSaldos = Usuario::where('compañia', 'NEXTEL')->sum('saldo');
        return view ('suma_saldo_nextel', compact('sumaSaldos'));
    }

    public function contarUsuarioComp(){
        $usuarios = Usuario::select('compañia', DB::raw('count(*) as total'))
        ->groupBy('compañia')
        ->get();
        return view('contar_usuario_comp', compact('usuarios'));
    }

    public function contarUsuarioNivel(){
        $usuarios = Usuario::select('nivel', DB::raw('count(*) as total'))
        ->groupBy('nivel')
        ->get();
        return view('contar_usuario_nivel', compact('usuarios'));
    }

    public function listarUsuariosNivel2(){
        $usuarios = Usuario::whereIn('nivel', [2])
        ->select('nombre', 'nivel')
        ->get();
        return view('login_usuario_nivel_2', compact('usuarios'));
    }

    public function mostrarUsuarioGmail(){
        $usuarios = Usuario::where('email', 'LIKE', '%@gmail.com')
        ->select('nombre', 'email')
        ->get();
        return view('usuarios_gmail', compact('usuarios'));
    }

    public function nombreTelefonoLG(){
        $usuarios = Usuario::whereIn('marca', ['LG', 'SAMSUNG', 'MOTOROLA'])
        ->select('nombre', 'telefono', 'marca')
        ->get();
        return view('nombre_telefono_lg', compact('usuarios'));
    }

    public function nombreTelefonoNo(){
        $usuarios = Usuario::whereNotIn('marca', ['LG', 'SAMSUNG'])
        ->select('nombre', 'telefono', 'marca')
        ->get();
        return view('nombre_telefono_no_lg', compact('usuarios'));
    }

    public function nombreCompIusacell(){
        $usuarios = Usuario::whereIn('compañia', ['IUSACELL'])
        ->select('nombre', 'telefono', 'compañia')
        ->get();
        return view('nombre_comp_iuasacell', compact('usuarios'));
    }

    public function nombreTelefonoNoTelcel(){
        $usuarios = Usuario::whereNotIn('compañia', ['TELCEL'])
        ->select('nombre', 'telefono', 'compañia')
        ->get();
        return view('nombre_telefono_no_telcel', compact('usuarios'));
    }

    public function saldoPromedioNokia(){
        $usuarios = Usuario::where('marca', 'NOKIA')
        ->avg('saldo');
        return view('saldo_promedio_nokia', compact('usuarios'));
    }

    public function nombreTelefonoCompIUAoAXEL(){
        $usuarios = Usuario::whereIn('compañia', ['IUSACELL', 'AXEL'])
        ->select('nombre', 'telefono', 'compañia')
        ->get();
        return view('nombre_telefono_comp_iua_axel', compact('usuarios'));
    }

    public function mostrarUsuarioNoYahoo(){
        $usuarios = Usuario::where('email', 'NOT LIKE', '%@yahoo.com')
        ->select('nombre', 'email')
        ->get();
        return view('usuarios_no_yahoo', compact('usuarios'));
    }

    public function nombreTelefonoCompNoIUAoTel(){
        $usuarios = Usuario::whereNotIn('compañia', ['IUSACELL', 'TELCEL'])
        ->select('nombre', 'telefono', 'compañia')
        ->get();
        return view('nombre_telefono_com_no_ius_tel', compact('usuarios'));
    }

    public function nombreTelefonoCompUne(){
        $usuarios = Usuario::whereIn('compañia', ['UNEFON'])
        ->select('nombre', 'telefono', 'compañia')
        ->get();
        return view('nombre_telefono_comp_une', compact('usuarios'));
    }

    public function listarMarcasAlfabeticoDesc(){
        $marcasDesc = Usuario::select('marca')
        ->distinct()
        ->orderBy('marca', 'desc')
        ->get();
        return view('marcas_descendentes', compact('marcasDesc'));
    }

    public function listarCompOrdenAlfAlea(){
        $compAlea = Usuario::select('compañia')
        ->distinct()
        ->inRandomOrder()
        ->get();
        return view('comp_aleatorias', compact('compAlea'));
    }

    public function usuariosNivel02(){
        $usuarios = Usuario::whereIn('nivel', [0, 2])
        ->get();
        return view('usuarios_nivel_02', compact('usuarios'));
    }

    public function saldoPromedioLG(){
        $usuarios = Usuario::where('marca', 'LG')
        ->avg('saldo');
        return view('saldo_promedio_lg', compact('usuarios'));
    }

    public function usuariosNivel13(){
        $usuarios = Usuario::whereIn('nivel', [1, 3])
        ->get();
        return view('usuarios_nivel_13', compact('usuarios'));
    }

    public function nombreTelefonoMarcaNoBlack(){
        $usuarios = Usuario::whereNotIn('marca', ['BLACKBERRY'])
        ->select('nombre', 'telefono', 'marca')
        ->get();
        return view('nombre_telefono_no_black', compact('usuarios'));
    }

    public function usuariosNivel3(){
        $usuarios = Usuario::whereIn('nivel', [3])
        ->select('nombre', 'usuario', 'nivel')
        ->get();
        return view('usuarios_nivel_3', compact('usuarios'));
    }

    public function usuariosNivel0(){
        $usuarios = Usuario::whereIn('nivel', [0])
        ->select('nombre', 'usuario', 'nivel')
        ->get();
        return view('usuarios_nivel_0', compact('usuarios'));
    }

    public function usuariosNivel1(){
        $usuarios = Usuario::whereIn('nivel', [1])
        ->select('nombre', 'usuario', 'nivel')
        ->get();
        return view('usuarios_nivel_1', compact('usuarios'));
    }

    public function contarUsuarioSexo(){
        $usuarios = Usuario::select('sexo', DB::raw('count(*) as total'))
        ->groupBy('sexo')
        ->get();
        return view('contar_usuario_sexo', compact('usuarios'));
    }

    public function nombreTelefonoCompAT(){
        $usuarios = Usuario::whereIn('compañia', ['AT&T'])
        ->select('nombre', 'usuario', 'telefono', 'compañia')
        ->get();
        return view('nombre_telefono_comp_at', compact('usuarios'));
    }

    public function listarCompOrdenDesc(){
        $compDesc = Usuario::select('compañia')
        ->distinct()
        ->orderBy('compañia', 'desc')
        ->get();
        return view('compañia_descendentes', compact('compDesc'));
    }

    public function listarUsuariosInactivos(){
        $usuarios = Usuario::whereIn('activo', [0])
        ->select('nombre', 'usuario', 'activo')
        ->get();
        return view('listar_usuarios_inactivos', compact('usuarios'));
    }

    public function listarUsuariosSinSaldo(){
        $usuarios = Usuario::whereIn('saldo', [0])
        ->select('nombre', 'usuario', 'telefono', 'saldo')
        ->get();
        return view('listar_usuarios_sin_saldo', compact('usuarios'));
    }

    public function saldoMinimoHombres(){
        $saldoMinimo = Usuario::where('sexo', 'H')->min('saldo');
        return view('saldo_minimo_hombres', compact('saldoMinimo'));
    }

    public function numerosTelefonosSaldoMayor300(){
        $usuarios = Usuario::where('saldo', '>', 300)
        ->select('telefono', 'saldo')
        ->get();
        return view('telefono_saldo_mayor', compact('usuarios'));
    }

    public function contarUsuarioMarcaTelefono(){
        $usuarios = Usuario::select('marca', DB::raw('count(*) as total'))
        ->groupBy('marca')
        ->get();
        return view('contar_usuario_marca', compact('usuarios'));
    }

    public function nombreTelefonoNoLG(){
        $usuarios = Usuario::whereNotIn('marca', ['LG'])
        ->select('nombre', 'telefono', 'marca')
        ->get();
        return view('nombre_telefono_noo_lg', compact('usuarios'));
    }

    public function listarCompOrdenAsc(){
        $compAsc = Usuario::select('compañia')
        ->distinct()
        ->orderBy('compañia', 'asc')
        ->get();
        return view('compañia_asc', compact('compAsc'));
    }

    public function sumaSaldoUnefon(){
        $sumaSaldos = Usuario::where('compañia', 'UNEFON')->sum('saldo');
        return view ('suma_saldo_unefon', compact('sumaSaldos'));
    }

    public function mostrarUsuarioHotmail(){
        $usuarios = Usuario::where('email', 'LIKE', '%@hotmail.com')
        ->select('nombre', 'usuario', 'email')
        ->get();
        return view('usuarios_hotmail', compact('usuarios'));
    }

    public function contarUsuarioSinSaldo2(){
        $usuarios = Usuario::where('saldo', 0)->orWhere('activo', 0)
        ->select('nombre', 'usuario', 'saldo', 'activo')
        ->get();
        return view('contar_usuarios_sin_saldo2', compact('usuarios'));
    }

    public function usuarioTelefonoCompIuaTel(){
        $usuarios = Usuario::whereIn('compañia', ['IUSACELL', 'TELCEL'])
        ->select('nombre', 'usuario', 'telefono', 'compañia')
        ->get();
        return view('usuario_telefono_comp_iua_tel', compact('usuarios'));
    }

    public function listarMarcasAsc(){
        $marcaAsc = Usuario::select('marca')
        ->distinct()
        ->orderBy('marca', 'asc')
        ->get();
        return view('marca_asc', compact('marcaAsc'));
    }

    public function listarMarcasOrdenAlfAlea(){
        $marcaAlea = Usuario::select('marca')
        ->distinct()
        ->inRandomOrder()
        ->get();
        return view('marca_aleatorias', compact('marcaAlea'));
    }

    public function nombreUsuarioCompIuaUne(){
        $usuarios = Usuario::whereIn('compañia', ['IUSACELL', 'UNEFON'])
        ->select('nombre', 'usuario', 'telefono', 'compañia')
        ->get();
        return view('uusario_telefono_comp_iua_une', compact('usuarios'));
    }

    public function nombreTelefonoNoMotorolaNokia(){
        $usuarios = Usuario::whereNotIn('marca', ['MOTOROLA', 'NOKIA'])
        ->select('nombre', 'telefono', 'marca')
        ->get();
        return view('nombre-telefono-no-mot', compact('usuarios'));
    }

    public function sumaSaldoTelcel(){
        $sumaSaldos = Usuario::where('compañia', 'TELCEL')->sum('saldo');
        return view ('suma_saldo_telcel', compact('sumaSaldos'));
    }
}