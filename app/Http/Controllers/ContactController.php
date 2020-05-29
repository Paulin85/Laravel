<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Contact, Entreprise};

class ContactController extends Controller
{

    public function index($Nom = null)
{
    $query = $Nom ? Entreprise::whereNom($Nom)->firstOrFail()->contacts() : Contact::query();
    $contacts = $query->withTrashed()->oldest('Nom')->paginate(20);
    $entreprises = Entreprise::all();
    return view('contacts.index', compact('contacts', 'entreprises', 'Nom'));
}
    //
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('contacts.create', compact('entreprises'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->nom = $request->get('Nom');
        $contact->prenom = $request->get('Prenom');
        $contact->mail = $request->get('Mail');
        $contact->numero = $request->get('Numero');
        $contact->entreprise_id = $request->get('entreprise_id');

        $contact->save();
        return redirect()->route('contacts.index');
    }



    public function show($contactId)
{
    $contact = Contact::where('id', $contactId)->first();
    $entreprise = $contact->entreprise->Nom;
    return view('contacts.show', compact('contact', 'entreprise'));
}

    public function destroy($id) {
        $contact = Contact::where('id',$id)->delete();
        return redirect()->route('contacts.index');
     }

     public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        $contact->save();
        return redirect()->route('contacts.index');
    }


}

