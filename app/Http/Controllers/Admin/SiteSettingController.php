<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        return view('admin.settings.edit', ['settings' => SiteSetting::pluck('value', 'key'), 'socialLinks' => SocialLink::orderBy('sort_order')->get()]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'telegram_url' => ['nullable', 'url', 'max:255'],
            'documentation_url' => ['nullable', 'url', 'max:255'],
            'pgp_url' => ['nullable', 'url', 'max:255'],
            'location' => ['nullable', 'string', 'max:160'],
            'footer_text' => ['nullable', 'string', 'max:500'],
        ]);

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return back()->with('success', 'Paramètres du site mis à jour.');
    }
}
