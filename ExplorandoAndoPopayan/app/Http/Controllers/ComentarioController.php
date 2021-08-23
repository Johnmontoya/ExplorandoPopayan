<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Auth\Manager;

class ComentarioController extends Controller
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

        
        $comentarios = Comentario::all();

        $comentarios =Comentario::join('users','comentarios.id_usuario','=','users.id')
        ->join('eventos', 'comentarios.evento','=','eventos.id')
        ->select('comentarios.id','comentarios.descripcion','users.name', 'eventos.nombre')
        ->paginate(10);
        return view('comentario.index', compact('comentarios'))->with('comentarios',$comentarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $informacion = Evento::orderBy('fecha','DESC')->take(3)->get();

        return view('comentario.create', compact('informacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('identificador');
        
        $evento = Evento::find($id);

        $comentarios = new Comentario();

        $comentarios->descripcion = $request->get('descripcion');        
        $comentarios->evento = $evento->id;
        $comentarios->id_usuario = Auth::id;
        $comentarios->save();

        return redirect()->route('comentarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = Comentario::find($id);
        return view('comentario.edit')->with('comentario',$comentario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comentario = Comentario::find($id);

        $comentario->descripcion = $request->get('descripcion');

        $comentario->save();

        return redirect('/comentarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::find($id);
        $comentario->delete();
        return redirect('/comentarios');
    }
}
