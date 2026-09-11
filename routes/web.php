<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactMessageController as AdminMessageController;
use App\Http\Controllers\Admin\CertificationController as AdminCertificationController;
use App\Http\Controllers\Admin\ExperienceController as AdminExperienceController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\SkillController as AdminSkillController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Models\ContactMessage;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::query()->where('is_published', true)->orderBy('sort_order')->latest('published_at')->get();
    $skills = Skill::query()->where('is_visible', true)->orderBy('category')->orderBy('sort_order')->get();
    $experiences = Experience::query()->orderBy('sort_order')->orderByDesc('start_date')->get();
    $certifications = Certification::query()->where('is_visible', true)->orderBy('sort_order')->get();

    return view('pages.home', compact('projects', 'skills', 'experiences', 'certifications'));
})->name('home');
Route::get('/a-propos', function () {
    $projectsCount = Project::query()->where('is_published', true)->count();
    $skills = Skill::query()->where('is_visible', true)->orderBy('category')->orderBy('sort_order')->get();
    $skillsCount = $skills->count();
    $experiences = Experience::query()->orderBy('sort_order')->orderByDesc('start_date')->get();
    $certificationsCount = Certification::query()->where('is_visible', true)->count();
    return view('pages.about', compact('projectsCount', 'skills', 'skillsCount', 'experiences', 'certificationsCount'));
})->name('about');
Route::get('/projets', function () {
    $baseQuery = Project::query()->where('is_published', true);
    $categories = (clone $baseQuery)->whereNotNull('category')->where('category', '!=', '')->distinct()->orderBy('category')->pluck('category');
    $selectedCategory = request('category');
    $projects = $baseQuery->when($selectedCategory, fn ($query) => $query->where('category', $selectedCategory))->orderBy('sort_order')->latest('published_at')->paginate(6)->withQueryString();
    return view('pages.projects', compact('projects', 'categories', 'selectedCategory'));
})->name('projects');
Route::get('/competences', function () {
    $skills = Skill::query()->where('is_visible', true)->orderBy('category')->orderBy('sort_order')->get();
    $certifications = Certification::query()->where('is_visible', true)->orderBy('sort_order')->get();
    return view('pages.skills', compact('skills', 'certifications'));
})->name('skills');
Route::get('/certifications', function () {
    $certifications = Certification::query()->where('is_visible', true)->orderBy('sort_order')->get();
    return view('pages.certifications', compact('certifications'));
})->name('certifications');
Route::get('/experience', function () {
    $experiences = Experience::query()->orderBy('sort_order')->orderByDesc('start_date')->get();
    return view('pages.experience', compact('experiences'));
})->name('experience');
Route::view('/contact', 'pages.contact')->name('contact');
Route::redirect('/administration', '/admin')->name('admin');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');
    Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth')->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', function () { return view('admin.dashboard', ['counts' => ['projects' => Project::count(), 'skills' => Skill::count(), 'experiences' => Experience::count(), 'certifications' => Certification::count(), 'messages' => ContactMessage::whereNull('read_at')->count()]]); })->name('dashboard');
        Route::resource('projects', AdminProjectController::class)->except(['show']);
        Route::resource('skills', AdminSkillController::class)->except(['show']);
        Route::resource('certifications', AdminCertificationController::class)->except(['show']);
        Route::get('settings', [SiteSettingController::class, 'edit'])->name('settings.edit');
        Route::put('settings', [SiteSettingController::class, 'update'])->name('settings.update');
        Route::post('social-links', [SocialLinkController::class, 'store'])->name('social-links.store');
        Route::put('social-links/{socialLink}', [SocialLinkController::class, 'update'])->name('social-links.update');
        Route::delete('social-links/{socialLink}', [SocialLinkController::class, 'destroy'])->name('social-links.destroy');
        Route::resource('experiences', AdminExperienceController::class)->except(['show']);
        Route::get('messages', [AdminMessageController::class, 'index'])->name('messages.index');
        Route::patch('messages/{message}/read', [AdminMessageController::class, 'read'])->name('messages.read');
        Route::delete('messages/{message}', [AdminMessageController::class, 'destroy'])->name('messages.destroy');
    });
});

Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');
