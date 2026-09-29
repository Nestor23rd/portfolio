<?php

namespace App\Providers;

use App\AI\Contracts\ChatProvider;
use App\AI\Providers\AsiOneChatProvider;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ChatProvider::class, AsiOneChatProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        View::composer('*', function ($view) {
            try {
                if (Schema::hasTable('site_settings')) {
                    $settings = SiteSetting::pluck('value', 'key');
                    $socialLinks = Schema::hasTable('social_links')
                        ? SocialLink::where('is_visible', true)->orderBy('sort_order')->get()
                        : collect();
                    $view->with('siteSettings', $settings)->with('socialLinks', $socialLinks);
                }
            } catch (\Throwable $e) {
                // Ignore during migrations / CLI setup
            }
        });
    }
}
