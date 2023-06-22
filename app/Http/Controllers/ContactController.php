<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            $contact = new Contact();
            $contact->name = $request->input('name');
            $contact->phone = $request->input('phone');
            $contact->email = $request->input('email');
            $contact->save();

            return redirect()->back()->with('success', 'Your message has been submitted successfully');
        } catch (ValidationException $e) {
            dd($e);
            $errorMessage = $e->getMessage() ?? "Error, Try again!";
            return redirect()->back()->withErrors($validator)->with('error', $errorMessage);
        }
    }
}
