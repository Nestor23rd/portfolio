<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function store(Request $request)
    {
        SocialLink::create($this->validated($request));
        return back()->with('success', 'Profil ajouté.');
    }

    public function update(Request $request, SocialLink $socialLink)
    {
        $socialLink->update($this->validated($request));
        return back()->with('success', 'Profil mis à jour.');
    }

    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();
        return back()->with('success', 'Profil supprimé.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'label' => ['required', 'string', 'max:80'],
            'url' => ['required', 'url', 'max:255'],
            'sort_order' => ['integer', 'min:0'],
            'is_visible' => ['boolean'],
        ]) + ['is_visible' => $request->boolean('is_visible')];
    }
}
