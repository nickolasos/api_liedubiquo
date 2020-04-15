<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InteresseAprendizagem extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'InteresseAprendizagem';
    public $timestamps = false;
    protected $primaryKey = 'idInteresseAprendizagem';

}
