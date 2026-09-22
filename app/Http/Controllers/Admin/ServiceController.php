<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() { return view('admin.services.index', ['services' => Service::orderBy('sort_order')->paginate(15)]); }
    public function create() { return view('admin.services.form', ['service' => new Service]); }
    public function store(Request $request) { $service = Service::create($this->validated($request)); return redirect()->route('admin.services.index')->with('success', "Service {$service->title} créé."); }
    public function edit(Service $service) { return view('admin.services.form', compact('service')); }
    public function update(Request $request, Service $service) { $service->update($this->validated($request)); return redirect()->route('admin.services.index')->with('success', 'Service mis à jour.'); }
    public function destroy(Service $service) { $service->delete(); return back()->with('success', 'Service supprimé.'); }
    private function validated(Request $request): array { $data = $request->validate(['title'=>['required','string','max:160'],'description'=>['required','string'],'icon'=>['required','string','max:60'],'sort_order'=>['integer','min:0'],'is_visible'=>['boolean']]); $data['is_visible'] = $request->boolean('is_visible'); return $data; }
}
