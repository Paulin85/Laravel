<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contact";
    
    public $timestamps = false;

    protected $fillable=['Nom', 'Prenom', 'Mail', 'Numero', 'entreprise_id'];

    public function entreprise()
        { 
            return $this->belongsTo(Entreprise::class); 
        }

}
