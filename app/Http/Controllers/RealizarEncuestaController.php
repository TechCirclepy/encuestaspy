<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Pregunta;
use Illuminate\Support\Facades\Auth;
class RealizarEncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.encuestas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $encuesta = new Pregunta;
        return view('admin.encuestas.create-encuesta', compact('encuesta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $encuesta = new Pregunta;
        $encuesta->titulo = $request->titulo;
        $encuesta->fecha_finalizacion = $request->fecha_finalizacion;
        if(Input::hasFile('foto')) {
            $file=Input::file('foto');
            Image::make($request->file('foto'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->foto=$file->getClientOriginalName();
        }
        $encuesta->estado = $request->estado;
        $encuesta->user_id = Auth::user()->id;
        $encuesta->opcion1 = $request->opcion1;
        $encuesta->opcion2 = $request->opcion2;
        $encuesta->opcion3 = $request->opcion3;
        $encuesta->opcion4 = $request->opcion4;
        $encuesta->opcion5 = $request->opcion5;
        $encuesta->opcion6 = $request->opcion6;
        $encuesta->opcion7 = $request->opcion7;
        $encuesta->opcion8 = $request->opcion8;
        $encuesta->opcion9 = $request->opcion9;
        $encuesta->opcion10 = $request->opcion10;

        if($encuesta -> save()){
            return redirect("/crear-encuesta");
        }else{
            return redirect("/crear-encuesta/create");
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
