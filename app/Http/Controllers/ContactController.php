<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contacts');
    }

    public function store(ContactRequest $request)
    {
        try {
            $contact = Contact::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'company' => $request->company,
            ]);

            Mail::to(config('services.mail.from_address'))->send(new ContactMessage($contact));

            return redirect()->back()->with('success', 'Your message has been submitted successfully');
        } catch (ValidationException $e) {
            dd($e);
            $errorMessage = $e->getMessage() ?? "Error, Try again!";
            return redirect()->back()->with('error', $errorMessage);
        }
    }
}
