<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Torneo;
use App\Models\TorneoEquipo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
        $equipos = DB::select('SELECT * FROM equipos e WHERE NOT EXISTS (SELECT NULL
                                FROM torneo_equipos te
                                WHERE te.id_equipo = e.id)');

        return view('torneo.torneo', compact('torneos', 'equipos'));
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
        $torneo->estado = 1;
        $torneo->id_organizador = auth()->user()->organizador->id; 
        
        $torneo->save();
       

        if(!empty($request->equipos)) {

            foreach ($request->equipos as $key) {
                $equipo = DB::table('equipos')->where('nombre', $key)->first();

                $torneoEquipo = new TorneoEquipo();
                $torneoEquipo->id_equipo = $equipo->id;
                $torneoEquipo->id_torneo = $torneo->id;

                $torneoEquipo->save();
            }
           
        }

        toastr()->success('El torneo ha sido almacenado correctamente. ¡A jugar!.', 'Torneo creado con éxito') ;

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
