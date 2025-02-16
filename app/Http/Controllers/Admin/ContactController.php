<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
   
    public function index(): View
    {
        $contacts = Contact::get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function create(): View
    {
        return view('admin.contacts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('admin.contacts.index')->with([
            'message' => 'Contact successfully created!',
            'alert-type' => 'success'
        ]);
    }


    public function edit($id)
    {
        $contact = Contact::findOrFail($id); 
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->route('admin.contacts.index')->with([
            'message' => 'Contact updated successfully!',
            'alert-type' => 'success'
        ]);
    }


    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}