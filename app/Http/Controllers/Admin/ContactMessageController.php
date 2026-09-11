<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactMessageController extends Controller
{
    public function index() { return view('admin.messages.index', ['messages' => ContactMessage::latest()->paginate(25)]); }
    public function read(ContactMessage $message): RedirectResponse { $message->update(['read_at' => now()]); return back()->with('success', 'Message marqué comme lu.'); }
    public function destroy(ContactMessage $message): RedirectResponse { $message->delete(); return back()->with('success', 'Message supprimé.'); }
}
