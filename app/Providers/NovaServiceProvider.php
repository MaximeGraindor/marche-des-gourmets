<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Exhibitor;
use Laravel\Nova\Nova;
use IDF\HtmlCard\HtmlCard;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'maxime.graindor@hotmail.com'
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            (new HtmlCard())->width('2/3')->view('cards.lastContact', [
                'messages' => Contact::latest()->take(5)->get()
            ]),
            (new HtmlCard())->width('full')->view('cards.lastExhibitors', [
                'exhibitors' => Exhibitor::latest()->take(10)->get()
            ]),



           //new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \Whitecube\NovaPage\NovaPageTool::make(),
            new \Tightenco\NovaStripe\NovaStripe,
            new \ClassicO\NovaMediaLibrary\NovaMediaLibrary(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


}
