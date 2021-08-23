<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use Illuminate\Http\Request;
use Image;
class EstacionController extends Controller
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
        $estaciones = Estacion::all();
        return view('estacion.index')->with('estaciones',$estaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extension = $request->file('foto');
        $mime = Image::make($extension)->mime();
        $ext = substr($mime, 6);

        $estaciones = new Estacion();
        $estaciones->nombre = $request->get('nombre');
        $estaciones->descripcion = $request->get('descripcion');
        $estaciones->latitud = $request->get('latitud');
        $estaciones->longitud = $request->get('longitud');
        $estaciones->foto = '.'.$ext;
        
        $estaciones->save();
        //Obtenemos el id del registro
        $id = $estaciones->id;

        //Generamos el nombre del archivo
        $file_name = $id.'.'.$ext;

       Image::make($request->file('foto'))
        ->resize(250, 250)
        ->save(public_path("img/estaciones/".$file_name));     

        return redirect('/estaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function show(Estacion $estacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estacion = Estacion::find($id);
        return view('estacion.edit')->with('estacion',$estacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estacion = Estacion::find($id);

        $estacion->nombre = $request->get('nombre');
        $estacion->descripcion = $request->get('descripcion');
        $estacion->latitud = $request->get('latitud');
        $estacion->longitud = $request->get('longitud');

        $estacion->save();

        return redirect('/estaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estacion  $estacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarEstacion = Estacion::find($id);
        $eliminarEstacion->delete();
        // redirect('/estaciones');
        return redirect()->route('estaciones.index');
        
    }
}
