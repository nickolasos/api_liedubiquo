<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'Conteudo';
    public $timestamps = false;
    protected $primaryKey = 'idConteudo';
}
