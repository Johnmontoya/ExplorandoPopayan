<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas = Ruta::all();

        $rutas =Ruta::join('eventos','rutas.id_evento','=','eventos.id')
        ->select('rutas.id','rutas.nombre_ruta','rutas.punto_partida','rutas.distancia_ruta','eventos.nombre')
        ->paginate(10);
        return view('ruta.index')->with('rutas',$rutas);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lis_eventos = Evento::all();
        return view('ruta.create', compact('lis_eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutas = new Ruta();

        $rutas->nombre_ruta = $request->get('nombre_ruta');
        $rutas->punto_partida = $request->get('punto_partida');
        $rutas->distancia_ruta = $request->get('distancia_ruta');

        $rutas->id_evento = $request->get('id_evento');

        $rutas->save();
        //return redirect('/rutas');
        return redirect()->route('rutas.index')
        ->with('success','Ruta creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function show(Ruta $ruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruta = Ruta::find($id);
        return view('ruta.edit')->with('ruta',$ruta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ruta = Ruta::find($id);

        $ruta->nombre_ruta = $request->get('nombre_ruta');
        $ruta->punto_partida = $request->get('punto_partida');
        $ruta->distancia_ruta = $request->get('distancia_ruta');

        $ruta->id_evento = $request->get('id_evento');

        $ruta->save();

        return redirect('/rutas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruta = Ruta::find($id);
        $ruta->delete();
        return redirect()->route('home')
        ->with('success','Sitio eliminado');
    }
}
