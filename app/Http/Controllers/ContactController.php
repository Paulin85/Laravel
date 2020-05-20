<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    //
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->nom = $request->get('Nom');
        $contact->prenom = $request->get('Prenom');
        $contact->mail = $request->get('Mail');
        $contact->numero = $request->get('Numero');
        $contact->entreprise = $request->get('Entreprise');

        $contact->save();
        return redirect()->route('contacts.index');
    }

    public function show($contactId)
    {
        $contact = Contact::where('id', $contactId)->first();
        return view('contacts.show', compact('contact'));
    }

    public function destroy($id) {
        $contact = Contact::where('id',$id)->delete();
        return redirect()->route('contacts.index');
     }



}

