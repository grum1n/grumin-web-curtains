<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('authorized.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authorized.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $request->validated();

        Contact::create([
            'site_name' => $request->input('site_name'),
            'site_logo_big_text' => $request->input('site_logo_big_text'),
            'site_logo_small_text' => $request->input('site_logo_small_text'),
            'address' => $request->input('address'),
            'google_maps_link' => $request->input('google_maps_link'),
            'email' => $request->input('email'),
            'phone_number_1' => $request->input('phone_number_1'),
            'phone_number_2' => $request->input('phone_number_2'),
            'facebook_acc' => $request->input('facebook_acc'),
            'instagram_acc' => $request->input('instagram_acc'),
            'twitter_acc' => $request->input('twitter_acc'),
            'linkedin_acc' => $request->input('linkedin_acc'),
        ]);

        return redirect()->route('contacts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('authorized.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $request->validated();

        $contact->update([
            'site_name' => $request->input('site_name'),
            'site_logo_big_text' => $request->input('site_logo_big_text'),
            'site_logo_small_text' => $request->input('site_logo_small_text'),
            'address' => $request->input('address'),
            'google_maps_link' => $request->input('google_maps_link'),
            'email' => $request->input('email'),
            'phone_number_1' => $request->input('phone_number_1'),
            'phone_number_2' => $request->input('phone_number_2'),
            'facebook_acc' => $request->input('facebook_acc'),
            'instagram_acc' => $request->input('instagram_acc'),
            'twitter_acc' => $request->input('twitter_acc'),
            'linkedin_acc' => $request->input('linkedin_acc'),
        ]);

        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return redirect()->route('contacts.index');
    }
}
