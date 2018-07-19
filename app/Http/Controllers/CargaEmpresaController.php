<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EmpresaFormRequest;
class CargaEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $query=trim($request->get('searchText'));
        $empresas = User::where('nivel', '=', '1')->where('name','LIKE','%'.$query.'%')->orderBy('id','desc')->paginate(4);
        return view('admin.empresa.index', compact('empresas','query'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empresa = new User;
        return view('admin.empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaFormRequest $request)
    {
        //
        $empresa = new User;
        $empresa->name = $request->name;
        $empresa->email = $request->email;
        $empresa->password = bcrypt($request->password);
        $empresa->nivel = '1';
        $empresa->activo = '1';
        $empresa->telefono = $request->telefono;

        if(Input::hasFile('foto')) {
            $file=Input::file('foto');
            Image::make($request->file('foto'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/empresas/' . $file->getClientOriginalName());
            $empresa->foto=$file->getClientOriginalName();
        }

        if($empresa -> save()){
            return redirect("/empresas");
        }else{
            return view("admin.empresa.create", ["empresa" => $empresa]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $empresa = User::find($id);
        return view('admin.empresa.show', ['empresa' => $empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empresa = User::find($id);
        return view("admin.empresa.edit", compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $empresa = User::find($id);
        $empresa->name = $request->name;
        $empresa->email = $request->email;
        $empresa->nivel = '1';
        $empresa->activo = '1';
        $empresa->telefono = $request->telefono;

        if(Input::hasFile('foto')) {
            $file=Input::file('foto');
            Image::make($request->file('foto'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/empresas/' . $file->getClientOriginalName());
            $empresa->foto=$file->getClientOriginalName();
        }

        if($empresa -> save()){
            return redirect("/empresas");
        }else{
            return view("admin.empresa.create", ["empresa" => $empresa]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa=User::findOrFail($id);
        if($empresa->activo==1){
            $empresa->activo="0";
        }else{
            $empresa->activo="1";
        }
        $empresa->update();
        return redirect('/empresas');
    }
}
