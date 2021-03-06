<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Entreprise, Contact};

class EntrepriseController extends Controller
{

    public function create()
    {
        return view('entreprises.create');
    }

    public function store(Request $request)
    {
        $entreprise = new Entreprise();
        $entreprise->nom = $request->get('Nom');
        $entreprise->domaine = $request->get('Domaine');
        $entreprise->adresse = $request->get('Adresse');
        $entreprise->numero = $request->get('Numero');
        $entreprise->save();
        return redirect()->route('entreprises.index');
    }

    public function show($entrepriseId)
    {
        $entreprise = Entreprise::where('id', $entrepriseId)->first();
        return view('entreprises.show', compact('entreprise'));
    }

    public function destroy($id) {
        $entreprises = Entreprise::where('id',$id)->delete();
        return redirect()->route('entreprises.index');
     }

    public function index()
    {
        $entreprises = Entreprise::paginate(5);
        return view('entreprises.index',compact('entreprises'));
    }

        public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit', compact('entreprise'));
    }
    
    public function update(Request $request, Entreprise $entreprise)
    {
        $entreprise->update($request->all());
        $entreprise->save();
        return redirect()->route('entreprises.index');
    }

}
