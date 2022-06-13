<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\MailRegistroLanding;
use App\Mail\MailRegistroLandingArrepentimientoMexico;
use App\Mail\MailRegistroLandingConferenciaMexico;
use App\Mail\MailRegistroMexico;
use App\Models\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LandingController extends Controller
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
        $landing = new Landing();
        $landing->nombres = $request->input("nombres");
        $landing->correo = $request->input("correo");
        $landing->celular = $request->input("celular");
        $landing->campana = $request->input("campana");
        $landing->suscripcion = $request->input("suscripcion");
        $landing->save();

        $campana = $landing->campana;
        $correo = $landing->correo;

        if(Str::contains($campana, 'arrepentimiento-mexico')) {

            Mail::to($correo)->send(new MailRegistroLandingArrepentimientoMexico($landing));
            Mail::to("arrepentimientosantidadmex@gmail.com")->send(new MailRegistroMexico($landing));
            return view('graciasarrepentimientomexico');

        } else if(Str::contains($campana, 'conferencia-mexico')) {

            Mail::to($correo)->send(new MailRegistroLandingConferenciaMexico($landing));
            Mail::to("arrepentimientosantidadmex@gmail.com")->send(new MailRegistroMexico($landing));
            return view('graciasconferenciamexico');

        } else {

            Mail::to($correo)->send(new MailRegistroLanding($landing));
            return view('registroconexito');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
