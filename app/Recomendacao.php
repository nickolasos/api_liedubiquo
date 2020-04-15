<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomendacao extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'Recomendacao';
    public $timestamps = false;
    protected $primaryKey = 'idRecomendacao';
}
