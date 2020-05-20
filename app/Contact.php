<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contact";
    
    public $timestamps = false;

    protected $fillable=['Nom', 'Prenom', 'Mail', 'Numero', 'Entreprise'];


}
