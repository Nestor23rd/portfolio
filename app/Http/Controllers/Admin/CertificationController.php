<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index() { return view('admin.certifications.index', ['certifications' => Certification::orderBy('sort_order')->latest()->paginate(15)]); }
    public function create() { return view('admin.certifications.form', ['certification' => new Certification]); }
    public function store(Request $request) { Certification::create($this->validated($request)); return redirect()->route('admin.certifications.index')->with('success', 'Certification créée.'); }
    public function edit(Certification $certification) { return view('admin.certifications.form', compact('certification')); }
    public function update(Request $request, Certification $certification) { $certification->update($this->validated($request)); return redirect()->route('admin.certifications.index')->with('success', 'Certification mise à jour.'); }
    public function destroy(Certification $certification) { $certification->delete(); return back()->with('success', 'Certification supprimée.'); }

    private function validated(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:180'], 'issuer' => ['nullable', 'string', 'max:160'],
            'description' => ['nullable', 'string', 'max:1500'], 'credential_id' => ['nullable', 'string', 'max:160'],
            'credential_url' => ['nullable', 'url', 'max:255'], 'status' => ['required', 'string', 'max:60'],
            'issued_at' => ['nullable', 'date'], 'sort_order' => ['integer', 'min:0'], 'is_visible' => ['boolean'],
        ]) + ['is_visible' => $request->boolean('is_visible')];
    }
}
