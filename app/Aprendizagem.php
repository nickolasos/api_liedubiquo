<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprendizagem extends Model
{
    //
    //
    protected $table = 'Aprendizagem';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $primaryKey = 'idAprendizagem';
}
