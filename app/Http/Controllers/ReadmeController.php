<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReadmeController extends Controller
{
    public function show(): View
    {
        return view('pages.readme', ['readme' => $this->content()]);
    }

    public function edit(): View
    {
        return view('admin.readme.edit', ['readme' => $this->content()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'content' => ['required', 'string', 'max:500000'],
        ]);

        SiteSetting::updateOrCreate(['key' => 'oracle_readme'], ['value' => $data['content']]);

        return back()->with('success', 'Le README Oracle a été enregistré.');
    }

    private function content(): string
    {
        return SiteSetting::where('key', 'oracle_readme')->value('value')
            ?? file_get_contents(resource_path('oracle-readme.txt'));
    }
}
