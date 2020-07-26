<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recomendacao;
use \DateTime;
use \DateTimeZone;

class RecomendacaoController extends Controller
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
        $recomendacao = Recomendacao::where('idInteresseAprendizagem',$idInteresseAprendizagem)->orderBy('idRecomendacao', 'desc')->get();
       
        if(isset($recomendacao)){
            return json_encode($recomendacao);
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
        $idRecomendacao = $request->input('idRecomendacao');
        $recomendacao = Recomendacao::find($idRecomendacao);
        if(isset($recomendacao)){
            $recomendacao->pontuacao = $request->input('pontuacao');
            $recomendacao->save();            
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
    }
}
