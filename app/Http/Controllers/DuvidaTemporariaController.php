<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DuvidaTemporaria;
use \DateTime;
use \DateTimeZone;

class DuvidaTemporariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $duvida = new DuvidaTemporaria();
        $duvida->idInteresseAprendizagem= $request->input('idInteresseAprendizagem');
        $duvida->duvida = $request->input('duvida');
        $duvida->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idInteresseAprendizagem)
    {
        //
        $duvida = DuvidaTemporaria::where('idInteresseAprendizagem',$idInteresseAprendizagem)->orderBy('idDuvidaTemporaria', 'desc')->get();
       
        if(isset($duvida)){
            return json_encode($duvida);
        }
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $idDuvidaTemporaria = $request->input('id');
        $duvida = DuvidaTemporaria::find($idDuvidaTemporaria);
        if(isset($duvida)){
            $duvida->duvida = $request->input('duvida');
            $duvida->save();            
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idIDuvidaTemporaria)
    {
        //
        $duvida = DuvidaTemporaria::find($idIDuvidaTemporaria);
        if(isset($duvida)){
            $duvida->delete();
        }
    }
}
