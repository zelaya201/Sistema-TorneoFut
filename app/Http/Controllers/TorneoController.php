<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torneos = Torneo::paginate();
     //   return $torneos;
        return view('torneo.torneo', compact('torneos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('torneo.addTorneo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $torneo = new Torneo();
        $torneo->nombre = $request->nomTorneo;
        $torneo->estado = $request->estadoTorneo;
        $torneo->id_organizador = auth()->user()->organizador->id;

        $torneo->save();

        return redirect()->route('torneo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Torneo $torneo)
    {
        return view('torneo.editTorneo', compact('torneo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Torneo $torneo)
    {
        $torneo->nombre = $request->nomTorneo;
        $torneo->estado = $request->estadoTorneo;
        $torneo->id_organizador = auth()->user()->organizador->id;

        $torneo->save();

        return redirect()->route('torneo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
