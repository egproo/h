<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Filament\Pages\Login;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\AdminResource;
use App\Filament\Resources\ServiceResource;
use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;
use Njxqlus\FilamentProgressbar\FilamentProgressbarPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admincp')
            ->path('admincp')
			->favicon(asset('images/Harees-Final.png'))
			->font('Almarai')
			->sidebarCollapsibleOnDesktop()
			->breadcrumbs(false)
			//->userMenuItems([
            //'profile' => MenuItem::make()->label('Edit profile'),
            // ...
            //])
			/*
			->navigation(function (NavigationBuilder $builder): NavigationBuilder {
				return $builder->items([
				  ...AdminResource::getNavigationItems(),
				  ...ServiceResource::getNavigationItems(),

				]);
			})
			*/
            ->login(Login::class)
			->databaseNotifications()
			->databaseNotificationsPolling('160s')
	        ->maxContentWidth('full')
            ->colors([
                'primary' => Color::hex('#49a8a0'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                //Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
			->authGuard('admincp')
			->plugins([FilamentProgressbarPlugin::make()->color('#49a8a0')]);
    }
}
