<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;

class ApiEntreprisesController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        # SELECT * FROM bidules
        return response()->json([
            'entreprises' => $entreprises
        ]);
    }

    public function detail()
    {
        $entreprises = Entreprise::all();
        # SELECT * FROM bidules
        return response()->json([
            'entreprises' => $entreprises
        ]);
    }


    public function user(){
        
    }
}
