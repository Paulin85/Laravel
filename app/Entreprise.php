<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{

    protected $table="entreprises";
    
    public $timestamps = false;

    protected $fillable=['Nom', 'Domaine', 'Adresse', 'Numero'];
}
