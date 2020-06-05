<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Entreprise;

class ApiEntreprisesController extends Controller
{


    // liste entreprises

    public function index()
    {
        $entreprises = Entreprise::all();
        # SELECT * FROM bidules
        return response()->json([
            'entreprises' => $entreprises
        ]);
    }




    // Détail d'un utilisateur

    public function user($userId)
    {

        $user = User::where('id', $userId)->first();

        return response()->json([
            'user' => $user,
          //  'Nombre de demandes'=> $nb_demandes,
        ]);

    }



    // Détail d'une entreprise
    public function detail($entrepriseId)
    {

        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        return response()->json([
            'entreprise' => $entreprise
        ]);

    }


}