<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contact extends Model
{
    use SoftDeletes;

    protected $table="contact";
    
    public $timestamps = false;

    protected $fillable=['Nom', 'Prenom', 'Mail', 'Numero', 'entreprise_id'];

    public function entreprise()
        { 
            return $this->belongsTo(Entreprise::class); 
        }

}

# Test git