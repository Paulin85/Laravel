<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    protected $table="demandes";
    
    public $timestamps = false;

    protected $fillable=['Nom', 'Adresse', 'Numero'];
}
