<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index() { return view('admin.projects.index', ['projects' => Project::orderBy('sort_order')->latest()->paginate(15)]); }
    public function create() { return view('admin.projects.form', ['project' => new Project]); }
    public function store(Request $request) { $project = Project::create($this->validated($request)); return redirect()->route('admin.projects.index')->with('success', "Projet {$project->title} créé."); }
    public function edit(Project $project) { return view('admin.projects.form', compact('project')); }
    public function update(Request $request, Project $project) { $project->update($this->validated($request, $project)); return redirect()->route('admin.projects.index')->with('success', "Projet {$project->title} mis à jour."); }
    public function destroy(Project $project) { if ($project->image_path) Storage::disk('public')->delete($project->image_path); $project->delete(); return back()->with('success', 'Projet supprimé.'); }
    private function validated(Request $request, ?Project $project = null): array
    {
        $slugRule = 'unique:projects,slug'.($project ? ','.$project->id : '');
        $data = $request->validate(['title'=>['required','string','max:160'],'slug'=>['nullable','string','max:180',$slugRule],'category'=>['nullable','string','max:120'],'excerpt'=>['required','string','max:1000'],'description'=>['nullable','string'],'technologies'=>['nullable','string'],'image_path'=>['nullable','string','max:255'],'image'=>['nullable','image','mimes:jpg,jpeg,png,webp','max:5120'],'project_url'=>['nullable','url','max:255'],'repository_url'=>['nullable','url','max:255'],'is_featured'=>['boolean'],'is_published'=>['boolean'],'sort_order'=>['integer','min:0'],'published_at'=>['nullable','date']]);
        $data['slug'] = Str::slug($data['slug'] ?: $data['title']);
        $data['technologies'] = array_values(array_filter(array_map('trim', explode(',', $data['technologies'] ?? ''))));
        $data['is_featured'] = $request->boolean('is_featured'); $data['is_published'] = $request->boolean('is_published');
        unset($data['image']);
        if ($request->hasFile('image')) {
            if ($project?->image_path) Storage::disk('public')->delete($project->image_path);
            $data['image_path'] = $request->file('image')->store('projects', 'public');
        }
        return $data;
    }
}
