<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GaleriaController extends Controller
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
        $galerias = Galeria::all();
        return view('galeria.index')->with('galerias',$galerias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $lis_eventos = Evento::all();
        return view('galeria.create', compact('lis_eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galerias = new Galeria();

        
        $request->validate([
            'foto'=>'required|image|max:1024'
        ]);

        
        $imagenes = $request->file('foto')->store('public/imagenes');
        //return $imagenes;

        $url = Storage::url($imagenes);
        //return $url;

         //crear acceso directo con el comando php artisan storage:link


        if($request->hasFile('foto')){
            $galeria['foto'] = $request->file('foto')->store('uploads','public');
        }

        $galerias->foto = $url;

        $galerias->id_evento = $request->id_evento;

        $galerias->save();

        return redirect('/galerias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarGaleria = Galeria::find($id);
        $eliminarGaleria->delete();
        // redirect('/galerias');
        return redirect()->route('galerias.index');
    }
}
