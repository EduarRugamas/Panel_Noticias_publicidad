<?php

namespace App\Http\Controllers;

use App\Noticias_Publicidad;
use Illuminate\Http\Request;

class NoticiasPublicidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        return view('index');
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
        //
        $datosNoticias = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosNoticias['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Noticias_Publicidad::insert($datosNoticias);

        return redirect('create')->with('Mensaje', 'Noticia Agregada con èxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }
}
