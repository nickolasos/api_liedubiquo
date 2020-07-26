<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CertezaProvisoria;
use \DateTime;
use \DateTimeZone;


class CertezaProvisoriaController extends Controller
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
        $certeza = new CertezaProvisoria();
        $certeza->idInteresseAprendizagem= $request->input('idInteresseAprendizagem');
        $certeza->certeza = $request->input('certeza');
        $certeza->save();
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
        $certeza = CertezaProvisoria::where('idInteresseAprendizagem',$idInteresseAprendizagem)->orderBy('idCertezaProvisoria', 'desc')->get();
       
        if(isset($certeza)){
            return json_encode($certeza);
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
        $idCertezaProvisoria = $request->input('id');
        $certeza = CertezaProvisoria::find($idCertezaProvisoria);
        if(isset($certeza)){
            $certeza->certeza = $request->input('certeza');
            $certeza->save();            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCertezaProvisoria)
    {
        //
        $certeza = CertezaProvisoria::find($idCertezaProvisoria);
        if(isset($certeza)){
            //$certeza->deletado = 1;
            //$certeza->save();
            $certeza->delete();
        }
    }
}
