<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InteresseAprendizagem;
use \DateTime;
use \DateTimeZone;
class InteresseAprendizagemController extends Controller
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
        
        $data = new DateTime();
        $data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        $data->format('d-m-Y H:i:s');
        
        $interesse = new InteresseAprendizagem();
        $interesse->idPessoa = $request->input('idPessoa');
        $interesse->descricaoSimplificada = $request->input('descricaoSimplificada');
        $interesse->descricaoCompleta = $request->input('descricaoCompleta');
        $interesse->dataCriacao =  $data;
        $interesse->save();
        
        
        
        //var_dump($interesse);
        

        //return json_encode(InteresseAprendizagem::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idPessoa)
    {
        //
        
        $interesse = InteresseAprendizagem::where('idPessoa',$idPessoa)->orderBy('dataCriacao', 'desc')->get();
       
        if(isset($interesse)){
            return json_encode($interesse);
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
        $idInteresseAprendizagem = $request->input('id');
        $interesse = InteresseAprendizagem::find($idInteresseAprendizagem);
        if(isset($interesse)){
            $interesse->descricaoSimplificada = $request->input('descricaoSimplificada');
            $interesse->descricaoCompleta = $request->input('descricaoCompleta');
            $interesse->save();            
        }
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idInteresseAprendizagem)
    {
        //
        //$interesse = InteresseAprendizagem::where('idInteresseAprendizagem',$idInteresseAprendizagem);
        $interesse = InteresseAprendizagem::find($idInteresseAprendizagem);
        if(isset($interesse)){
            $interesse->delete();
        }
    }
}
