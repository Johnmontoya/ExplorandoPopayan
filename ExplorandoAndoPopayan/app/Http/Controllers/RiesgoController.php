<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Riesgo;
use Illuminate\Http\Request;

class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riesgos =Riesgo::join('eventos','riesgos.id_evento','=','eventos.id')
        ->select('riesgos.id','riesgos.tipo_riesgo','riesgos.ubicacion','eventos.nombre')
        ->paginate(10);
        return view('riesgos.index')->with('riesgos',$riesgos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lis_eventos = Evento::all();
        return view('riesgos.create', compact('lis_eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riesgos = new Riesgo();

        $riesgos->tipo_riesgo = $request->get('tipo_riesgo');
        $riesgos->ubicacion = $request->get('ubicacion');
        $riesgos->id_evento= $request->get('id_evento');
       
        $riesgos->id_evento = $request->id_evento;

        $riesgos->save();

        return redirect('/riesgos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function show(Riesgo $riesgo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $riesgo = Riesgo::find($id);
        return view('riesgos.edit')->with('riesgo',$riesgo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $riesgo = Riesgo::find($id);

        $riesgo->tipo_riesgo= $request->get('tipo_riesgo');
        $riesgo->ubicacion= $request->get('ubicacion');
        $riesgo->id_evento= $request->get('id_evento');
      

        $riesgo->save();

        return redirect('/riesgos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riesgo = Riesgo::find($id);
        $riesgo->delete();
        return redirect('/riesgos');
    }
    }

