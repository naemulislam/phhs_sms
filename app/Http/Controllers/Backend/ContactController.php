<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $message = Contact::latest()->get();
        return view('backend.dashboard.message.index', compact('message'));
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message is deleted successfully!');
    }
    public function status(Request $request, Contact $contact)
    {
        $status = 1;
        if ($request->status == 0) {
            $status = 0;
        }
        $contact->update([
            'is_seen' => $status,
        ]);
        return back()->with('success', 'Status change successfully!');
    }
}
