<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\MailRegistroOracion;
use App\Models\Oracion;
use Illuminate\Http\Request;

class OracionController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oracion = new Oracion();
        $oracion->nombres = $request->input("nombres");
        $oracion->correo = $request->input("correo");
        $oracion->celular = $request->input("celular");
        $oracion->pais = $request->input("pais");
        $oracion->tipopeticion = $request->input("tipopeticion");
        $oracion->peticion = $request->input("peticion");
        $oracion->suscripcion = $request->input("suscripcion");
        $oracion->save();

        $correo = $request->input("correo");
        Mail::to($correo)->send(new MailRegistroOracion($oracion));

        return view('registroconexito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oracion  $oracion
     * @return \Illuminate\Http\Response
     */
    public function show(Oracion $oracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oracion  $oracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Oracion $oracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oracion  $oracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oracion $oracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oracion  $oracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oracion $oracion)
    {
        //
    }
}
