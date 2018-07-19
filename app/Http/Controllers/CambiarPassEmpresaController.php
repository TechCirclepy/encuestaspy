<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CambiarPassEmpresaFormRequest;
use App\User;
class CambiarPassEmpresaController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function edit($id) {
        $empresa=User::findOrFail($id);
        return view("admin.empresa.cambiar_pass",["empresa"=>$empresa]);
    }

    public function update(CambiarPassEmpresaFormRequest $request,$id) {

        $empresa=User::findOrFail($id);
        $empresa->password=bcrypt($request->get('password'));
        if ($empresa->update()) {
        return redirect('empresas')->with('pass', 'se cambio la contraseña correctamente!');
        }
    }
}
