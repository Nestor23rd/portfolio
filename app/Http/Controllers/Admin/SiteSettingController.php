<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'phone_number' => ['nullable', 'string', 'max:40'],
            'whatsapp_number' => ['nullable', 'string', 'max:40'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'telegram_url' => ['nullable', 'url', 'max:255'],
            'documentation_url' => ['nullable', 'url', 'max:255'],
            'pgp_url' => ['nullable', 'url', 'max:255'],
            'location' => ['nullable', 'string', 'max:160'],
            'footer_text' => ['nullable', 'string', 'max:500'],
            'cv' => ['nullable', 'file', 'mimes:pdf', 'max:10240'],
            'remove_cv' => ['boolean'],
        ]);

        unset($data['cv'], $data['remove_cv']);

        foreach ($data as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $currentCv = SiteSetting::where('key', 'cv_path')->value('value');
        if ($request->boolean('remove_cv') && $currentCv) {
            Storage::disk('public')->delete($currentCv);
            SiteSetting::updateOrCreate(['key' => 'cv_path'], ['value' => null]);
        }
        if ($request->hasFile('cv')) {
            if ($currentCv) Storage::disk('public')->delete($currentCv);
            $cvPath = $request->file('cv')->store('site', 'public');
            SiteSetting::updateOrCreate(['key' => 'cv_path'], ['value' => $cvPath]);
        }

        return back()->with('success', 'Paramètres du site mis à jour.');
    }
}
