<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Comentario;

class WelcomeController extends Controller
{
    public function index(){

        $informacion = Evento::orderBy('fecha','DESC')->take(3)->get();

        return view('welcome', compact('informacion'));
    }

    public function indexApi(){

        try{
 
            $productos = Evento::orderBy('fecha','DESC')->take(3)->get();

            return response()->json([
                'success' => true,
                'productos' => $productos
            ]);

        } catch(Exception $e){

            return response()->json([
                'error' => $e
            ]);
        }
    }

    public function store(Request $request){

        $id = $request->get('identificador');
        $evento = Evento::find($id);
        $comentarios = new Comentario();

        $comentarios->descripcion = $request->get('descripcion');
        $comentarios->evento = $evento->id;

        $comentarios->save();

        return redirect()->route('welcome');
    }

    public function storeApi(Request $request, $id){

        try{

            $comentarios = new Comentario();
            $comentarios->descripcion = $request->get('descripcion'); 
            $comentarios->evento = $id; 
            $comentarios->save();

            return response()->json([
                "success" => true,
                "message" => "Comentario guardado correctamente!",
                "comentarios" => $comentarios
            ]);

        }catch(Exception $e){

            return response()->json([
                'error' => $e
            ]);
        }
    }
}
