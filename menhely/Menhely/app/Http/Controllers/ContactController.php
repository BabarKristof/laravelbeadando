<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'msg' => $request->msg
        ]);

        if($contact->save())
        {
            return redirect('/kapcsolat')->with('success', 'Köszönjök, hogy felvetted velünk a kapcsolatot, hamarosan jelentkezünk!');
        }

        return redirect('/kapcsolat');
    }
}

