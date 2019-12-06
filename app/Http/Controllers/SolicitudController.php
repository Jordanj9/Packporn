<?php

namespace App\Http\Controllers;

use App\Solicitud;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionSolicitud;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::all();
        return view('solicitudes.list')
            ->with('location', 'solicitud')
            ->with('solicitudes', $solicitudes);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitud = new Solicitud($request->all());

        foreach ($solicitud->attributesToArray() as $key => $value) {
            if ($key == 'email') {
                $solicitud->$key = $value;
            } else {
                $solicitud->$key = strtoupper($value);
            }
        }
        $result = $solicitud->save();
        if ($result) {
            $response = $solicitud->alias . "<h5> Has sido suscrito de manera exitosa, hemos enviado un correo a <strong>" . $solicitud->email . "</strong> para continuar con el proceso.";
            return redirect()->route('inicio');
            flash($response)->success();
            $responsecliente = "<h5>Suscripción exitosa!</h5><br><h5>Para continuar con el proceso </h5><p> Haz click en el siguiente enlace</p><a href='https://wa.me/573217064377'>https://wa.me/573217064377</a>";
            Mail::to($solicitud->email)->send(new NotificacionSolicitud($responsecliente));
            $responseAdmin = "<h5>Señor(a) admin se ha recibido una nueva solicitud </h5><br><h5>Detalles de la suscripción </h5><p>Fecha de Solicitud: " . $solicitud->created_at . "<br><h5>Detalles del Solicitante</h5><br><p><b>Alias: " . $solicitud->alias . "</b></p><p><b>Email: " . $solicitud->email . "</b></p>";
            Mail::to('colonca1999@gmail.com')->send(new NotificacionSolicitud($responseAdmin));
            flash($response)->success();
            return redirect()->route('inicio');
        } else {
            flash("No hemos podido guardar su suscripción, vuelva a intentarlo.")->error();
            return redirect()->route('inicio');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Solicitud $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Solicitud $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Solicitud $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Solicitud $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);
        $result = $solicitud->delete();
        if ($result) {
            flash("La solicitud de <strong>" . $solicitud->alias . "</strong> fue eliminada de forma exitosa!")->success();
            return redirect()->route('solicitud.index');
        } else {
            flash("La solicitud de <strong>" . $solicitud->alias . "</strong> no pudo ser eliminada. Error: " . $result)->error();
            return redirect()->route('solicitud.index');
        }
    }
}
