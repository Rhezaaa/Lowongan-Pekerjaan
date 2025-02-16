<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('frontend.contact', compact('contacts'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());

        return back()->with([
            'message' => 'succesfully send !',
            'alert-type'=> 'success'
        ]);
    }
}
