<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
 #rota para login
 Route::post('login','Api\\Auth\\LoginJwtController@login_alternativo');

 #rotas de interesse de aprendizagem
 Route::get('interesse/{idPessoa} ','InteresseAprendizagemController@show');
 Route::post('interesse/inserir ','InteresseAprendizagemController@store');
 Route::post('interesse/alterar ','InteresseAprendizagemController@update');
 Route::get('interesse/apagar/{idInteresseAprendizagem} ','InteresseAprendizagemController@destroy');


#rotas duvida temporaria
 Route::get('duvida/{idInteresseAprendizagem}','DuvidaTemporariaController@show');
 Route::post('duvida/inserir','DuvidaTemporariaController@store');
 Route::post('duvida/alterar','DuvidaTemporariaController@update');
 Route::get('duvida/apagar/{idIDuvidaTemporaria} ','DuvidaTemporariaController@destroy');

#rotas certeza provisória
  Route::get('certeza/{idInteresseAprendizagem}','CertezaProvisoriaController@show');
  Route::post('certeza/inserir','CertezaProvisoriaController@store');
  Route::post('certeza/alterar','CertezaProvisoriaController@update');
  Route::get('certeza/apagar/{idCertezaProvisoria} ','CertezaProvisoriaController@destroy');

#rotas conteudo
  Route::get('conteudo/{idInteresseAprendizagem}','ConteudoController@show');
  Route::post('conteudo/inserir','ConteudoController@store');
  Route::post('conteudo/alterar','ConteudoController@update');
  Route::get('conteudo/apagar/{idConteudo} ','ConteudoController@destroy');

#rotas recomendações
  Route::get('recomendacao/{idInteresseAprendizagem}','RecomendacaoController@show');
  Route::post('recomendacao/alterar','RecomendacaoController@update');
  
#rotas aprendizagem
  Route::get('aprendizagem/{idInteresseAprendizagem}','AprendizagemController@show');
  Route::post('aprendizagem/inserir','AprendizagemController@store');
  Route::post('aprendizagem/alterar','AprendizagemController@update');
  Route::get('aprendizagem/apagar/{idIDuvidaTemporaria} ','AprendizagemController@destroy');






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/teste',function(){
    $response = new \Illuminate\Http\Response(json_encode(['msg' =>'Minha primeira api']));
    $response->header('Content-Type','application/json');
    return $response;
});

Route::get('/tpessoa',function(){
   return \App\Pessoa::all();
});

Route::get('/members',function(){
    return \App\Member::all();
 });

 Route::delete('/interesseaprendizagem',function(){
    return \App\InteresseAprendizagem::all();
 });
 Route::post('11 ','Api\\Auth\\LoginJwtController@login');