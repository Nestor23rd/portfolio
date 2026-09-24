<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(): View
    {
        return view('admin.skills.index', [
            'skills' => Skill::orderBy('category')->orderBy('sort_order')->paginate(25),
        ]);
    }

    public function create(): View
    {
        return view('admin.skills.form', ['skill' => new Skill]);
    }

    public function store(Request $request): RedirectResponse
    {
        Skill::create($this->validated($request));

        return redirect()->route('admin.skills.index')->with('success', 'Compétence créée.');
    }

    public function edit(Skill $skill): View
    {
        return view('admin.skills.form', compact('skill'));
    }

    public function update(Request $request, Skill $skill): RedirectResponse
    {
        $skill->update($this->validated($request));

        return redirect()->route('admin.skills.index')->with('success', 'Compétence mise à jour.');
    }

    public function destroy(Skill $skill): RedirectResponse
    {
        $skill->delete();

        return back()->with('success', 'Compétence supprimée.');
    }

    /**
     * @return array<string, mixed>
     */
    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'name_en' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:1000'],
            'description_en' => ['nullable', 'string', 'max:1000'],
            'category' => ['required', 'string', 'max:100'],
            'category_en' => ['nullable', 'string', 'max:100'],
            'proficiency' => ['nullable', 'integer', 'between:0,100'],
            'sort_order' => ['integer', 'min:0'],
            'is_visible' => ['boolean'],
        ]) + ['is_visible' => $request->boolean('is_visible')];
    }
}
