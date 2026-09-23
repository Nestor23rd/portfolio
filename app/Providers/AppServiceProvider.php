<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        \Illuminate\Support\Facades\View::composer('*', function ($view) {
            try {
                if (\Illuminate\Support\Facades\Schema::hasTable('site_settings')) {
                    $settings = \App\Models\SiteSetting::pluck('value', 'key');
                    $socialLinks = \Illuminate\Support\Facades\Schema::hasTable('social_links')
                        ? \App\Models\SocialLink::where('is_visible', true)->orderBy('sort_order')->get()
                        : collect();
                    $view->with('siteSettings', $settings)->with('socialLinks', $socialLinks);
                }
            } catch (\Throwable $e) {
                // Ignore during migrations / CLI setup
            }
        });
    }
}
