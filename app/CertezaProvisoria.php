<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertezaProvisoria extends Model
{
    //
    protected $table = 'CertezaProvisoria';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $primaryKey = 'idCertezaProvisoria';

}
