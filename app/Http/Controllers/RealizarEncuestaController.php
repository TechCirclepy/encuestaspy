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
        return view('admin.encuestas.index', compact('cerrada'));
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
        $encuesta->subtitulo = $request->subtitulo;
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
        if(Input::hasFile('imagen1')) {
            $file=Input::file('imagen1');
            Image::make($request->file('imagen1'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen1=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen2')) {
            $file=Input::file('imagen2');
            Image::make($request->file('imagen2'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen2=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen3')) {
            $file=Input::file('imagen3');
            Image::make($request->file('imagen3'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen3=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen4')) {
            $file=Input::file('imagen4');
            Image::make($request->file('imagen4'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen4=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen5')) {
            $file=Input::file('imagen5');
            Image::make($request->file('imagen5'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen5=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen6')) {
            $file=Input::file('imagen6');
            Image::make($request->file('imagen6'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen6=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen7')) {
            $file=Input::file('imagen7');
            Image::make($request->file('imagen7'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen7=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen8')) {
            $file=Input::file('imagen8');
            Image::make($request->file('imagen8'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen8=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen9')) {
            $file=Input::file('imagen9');
            Image::make($request->file('imagen9'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen9=$file->getClientOriginalName();
        }
        if(Input::hasFile('imagen10')) {
            $file=Input::file('imagen10');
            Image::make($request->file('imagen10'))
                ->resize(144, 145)
                ->save(public_path().'/imagenes/encuestas/' . $file->getClientOriginalName());
            $encuesta->imagen10=$file->getClientOriginalName();
        }
        $encuesta->tipo_encuesta = $request->tipo_encuesta;

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
