<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    protected $table="demandes";
    
    public $timestamps = false;

    protected $fillable=['Nom', 'Prenom', 'Entreprise',  'Mail', 'Numero', 'Date'];

    public function entreprises()
    {
        return $thishasMany(Demande::class, "entreprises_id");
    }

}

