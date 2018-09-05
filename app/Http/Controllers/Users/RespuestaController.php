<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pregunta;
use App\Respuesta;
use Illuminate\Support\Facades\Auth;
class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $preguntas = Pregunta::all();
        $respuesta = new Respuesta;
        return view('user.respuesta.respuesta', compact('preguntas', 'respuesta'));
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
        $respuesta = new Respuesta;
        $respuesta->respuesta1 = $request->respuesta1;
        $respuesta->respuesta2 = $request->respuesta2;
        $respuesta->respuesta3 = $request->respuesta3;
        $respuesta->respuesta4 = $request->respuesta4;
        $respuesta->respuesta5 = $request->respuesta5;
        $respuesta->respuesta6 = $request->respuesta6;
        $respuesta->respuesta7 = $request->respuesta7;
        $respuesta->respuesta8 = $request->respuesta8;
        $respuesta->respuesta9 = $request->respuesta9;
        $respuesta->respuesta10 = $request->respuesta10;
        $respuesta->idpregunta = $request->idpregunta;
        $respuesta->user_id = Auth::user()->id;

        if ($respuesta->save()) {
            return redirect('/');
        } else {
            return view('user.respuesta.respuesta');
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
