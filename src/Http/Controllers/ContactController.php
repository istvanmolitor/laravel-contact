<?php

namespace IstvanMolitor\LaravelContact\Http\Controllers;

use App\Http\Controllers\Controller;
use IstvanMolitor\LaravelContact\Http\Requests\ContactSendRequest;
use IstvanMolitor\LaravelContact\Mail\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::index', [
        ]);
    }

    public function send(ContactSendRequest $request)
    {
        \Mail::to(config('mail.from.address'))->send(new Contact($request->name, $request->phone, $request->message));

        return redirect()->route('contact.sent');
    }

    public function sent()
    {
        return view('contact::sent', [
        ]);
    }
}