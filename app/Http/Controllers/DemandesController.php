<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demandes;

class DemandesController extends Controller
{
    public function index()
    {
        $demandes = Demandes::all();
        return view('demandes.index', compact('demandes'));
    }

    public function create()
    {
        return view('demandes.create');
    }

    public function store(Request $request)
    {
        $demandes = new Demandes();
        $demandes->nom = $request->get('Nom');
        $demandes->adresse = $request->get('Adresse');
        $demandes->numero = $request->get('Numero');
        $demandes->save();
        return redirect()->route('demandes.index');
    }

    public function show($demandesId)
    {
        $demandes = Demandes::where('id', $demandesId)->first();
        return view('demandes.show', compact('demandes'));
    }
}
