<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index() { return view('admin.experiences.index', ['experiences' => Experience::orderByDesc('start_date')->paginate(15)]); }
    public function create() { return view('admin.experiences.form', ['experience' => new Experience]); }
    public function store(Request $request) { Experience::create($this->validated($request)); return redirect()->route('admin.experiences.index')->with('success', 'Expérience créée.'); }
    public function edit(Experience $experience) { return view('admin.experiences.form', compact('experience')); }
    public function update(Request $request, Experience $experience) { $experience->update($this->validated($request)); return redirect()->route('admin.experiences.index')->with('success', 'Expérience mise à jour.'); }
    public function destroy(Experience $experience) { $experience->delete(); return back()->with('success', 'Expérience supprimée.'); }
    private function validated(Request $request): array { $data = $request->validate(['role'=>['required','string','max:180'],'company'=>['nullable','string','max:160'],'location'=>['nullable','string','max:160'],'start_date'=>['required','date'],'end_date'=>['nullable','date','after_or_equal:start_date'],'description'=>['required','string'],'technologies'=>['nullable','string'],'sort_order'=>['integer','min:0'],'is_current'=>['boolean']]); $data['technologies']=array_values(array_filter(array_map('trim',explode(',',$data['technologies']??'')))); $data['is_current']=$request->boolean('is_current'); return $data; }
}
