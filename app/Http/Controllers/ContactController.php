<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:3000',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil terkirim! Tim Lakemba 12 akan segera menghubungi Anda.');
    }
}
