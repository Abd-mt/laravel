<?php

namespace App\Http\Controllers;

use App\Models\asignatura;
use App\Models\Nota;
use Illuminate\Http\Request;
use App\Models\Tema;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=auth()->id();
        //dole dos puntos consuta
        $notaf=Nota::where('id_usuario',$userid)->get();

        return view('notas.notasIndex',compact('notaf'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.notasCreate');
        
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
        $userid=auth()->id();
        $tema=Tema::where('name',$request->temi)
            ->first();

        $notal=new Nota;
        $notal->titulo=$request->titulo;
        $notal->texto=$request->texto;
        $notal->importancia=$request->importancia;
        $notal->hora=$request->hora;
        $notal->User_id=$userid;
        $notal->Tema_id=$tema->id;

        $notal->save();
    
        return redirect()->route('notas.notasIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notas= Nota::find($id);

        return view('notas.notasShow',compact('notas'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notas= Nota::find($id);

        return view('notas.notasEdit',compact('notas'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notaj=Nota::find($id);
        $user_id=auth()->id();

        $notaj->titulo=$request->titulo;
        $notaj->resumen=$request->resumen;
        $notaj->p_clave=$request->p_clave;
        $notaj->apunte=$request->apunte;
        $notaj->save();
        return redirect()->route('notas.notasIndex')->with('actualizacion correcta');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota=Nota::find($id);
        $nota->delete();
        return redirect()->route('notas.notasIndex');
        //
    }
}