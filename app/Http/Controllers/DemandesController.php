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
        $demandes->Nom = $request->get('Nom');
        $demandes->Prenom = $request->get('Prenom');
        $demandes->Entreprise = $request->get('Entreprise');
        $demandes->Mail = $request->get('Mail');
        $demandes->Numero = $request->get('Numero');
        $demandes->Date = $request->get('Date');
        $demandes->save();
        return redirect()->route('demandes.index');
    }

    public function show($demandesId)
    {
        $demandes = Demandes::where('id', $demandesId)->first();
        return view('demandes.show', compact('demandes'));
    }

    public function destroy($id) {
        $demandes = Demandes::where('id',$id)->delete();
        return redirect()->route('demandes.index');
     }
     public function edit(Demandes $demande)
     {
         return view('demandes.edit', compact('demande'));
     }
 
     public function update(Request $request, Demandes $demande)
     {
         $demande->update($request->all());
         $demande->save();
         return redirect()->route('demandes.index');
     }
}
