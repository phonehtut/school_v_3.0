<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        return redirect('contact')->with('success', 'Your Contact Form is Successful We Will Contact Later');
    }
}
