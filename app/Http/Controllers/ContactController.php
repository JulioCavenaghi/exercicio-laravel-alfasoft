<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContactRequest;
use App\Models\Contact;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contact $contact)
    {
        $contacts = $contact->all();

        return view('site/index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateContactRequest $request, Contact $contact)
    {
        $data = $request->validated();

        $contact = $contact->create($data);

        return redirect()->route('contacts.index')->with('message', 'Registration completed successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        if(!$contact = Contact::find($id))
        {
             return back();
        }

        return view('site/show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string|int $id)
    {
        if(!$contact = Contact::find($id))
        {
            return back();
        }

        return view('site/edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateContactRequest $request, string|int $id)
    {
        if(!$contact = Contact::find($id))
        {
            return back();
        }

        $contact->update($request->validated());

        return redirect()->route('contacts.index')->with('message', 'Registration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string|int $id)
    {
        if(!$contact = Contact::find($id))
        {
            return back();
        }

        $contact->delete();

        return redirect()->route('contacts.index')->with('message', 'Registration deleted successfully');
    }
}
