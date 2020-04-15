<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuvidaTemporaria extends Model
{
    //
    protected $table = 'DuvidaTemporaria';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $primaryKey = 'idDuvidaTemporaria';

}
