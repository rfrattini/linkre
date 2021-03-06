<?php

namespace Raffles\Modules\Linkre\Providers;

use Caffeinated\Modules\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('linkre', 'Resources/Lang', 'app'), 'linkre');
        $this->loadViewsFrom(module_path('linkre', 'Resources/Views', 'app'), 'linkre');
        $this->loadMigrationsFrom(module_path('linkre', 'Database/Migrations', 'app'), 'linkre');
        $this->loadConfigsFrom(module_path('linkre', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('linkre', 'Database/Factories', 'app'));

        Relation::morphMap([
            'investments' => 'Raffles\Modules\Linkre\Models\Investment',
            'users' => 'Raffles\Modules\Linkre\Models\User',
        ]);
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
