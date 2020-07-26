<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aprendizagem;
use \DateTime;
use \DateTimeZone;


class AprendizagemController extends Controller
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
        $aprendizagem = new Aprendizagem();
        $aprendizagem->idInteresseAprendizagem= $request->input('idInteresseAprendizagem');
        $aprendizagem->descricao = $request->input('descricao');
        $aprendizagem->save();
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
        $aprendizagem = Aprendizagem::where('idInteresseAprendizagem',$idInteresseAprendizagem)->orderBy('idAprendizagem', 'desc')->get();
       
        if(isset($aprendizagem)){
            return json_encode($aprendizagem);
        }
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
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
        $idAprendizagem = $request->input('id');
        $aprendizagem = Aprendizagem::find($idAprendizagem);
        if(isset($aprendizagem)){
            $aprendizagem->descricao = $request->input('descricao');
            $aprendizagem->save();            
        }
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
        $aprendizagem = Aprendizagem::find($id);
        if(isset($aprendizagem)){
            $aprendizagem->delete();
        }
    }
}
