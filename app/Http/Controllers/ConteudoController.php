<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conteudo;
use \DateTime;
use \DateTimeZone;

class ConteudoController extends Controller
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
        $data = new DateTime();
        $data->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        $data->format('d-m-Y H:i:s');



        $conteudo = new Conteudo();
        $conteudo->conteudo = $request->input('conteudo');
        $conteudo->dataInsercao= $data;
        $conteudo->linkArquivo= $request->input('linkArquivo');
        $conteudo->origem= $request->input('origem');
        $conteudo->idInteresseAprendizagem= $request->input('idInteresseAprendizagem');
        
        $conteudo->save();
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
        $conteudo = Conteudo::where('idInteresseAprendizagem',$idInteresseAprendizagem)->orderBy('dataInsercao', 'desc')->get();
       
        if(isset($conteudo)){
            return json_encode($conteudo);
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
        $idConteudo = $request->input('id');
        $conteudo = Conteudo::find($idConteudo);
        if(isset($conteudo)){
            $conteudo->conteudo = $request->input('conteudo');
            $conteudo->linkArquivo = $request->input('linkArquivo');
            $conteudo->origem = $request->input('origem');
            $conteudo->save();            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idConteudo)
    {
        //
        $conteudo = Conteudo::find($idConteudo);
        if(isset($conteudo)){
            $conteudo->delete();
        }
    }
}
