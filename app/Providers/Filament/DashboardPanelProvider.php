<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use App\Http\Middleware\OTPDashVerification;
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
use App\Filament\Dashboard\Pages\Login;
use App\Filament\Dashboard\Pages\Register;
use Filament\Navigation\NavigationItem;
use Njxqlus\FilamentProgressbar\FilamentProgressbarPlugin;

class DashboardPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
		    ->default()
            ->id('dashboard')
			->favicon(asset('images/favicon.png'))
            ->path('dashboard')
			->breadcrumbs(false)
			->plugins([                
               FilamentProgressbarPlugin::make()->color('#FF0000')
            ])
			->navigationItems([
            NavigationItem::make('home')->label('الرئيسية')
                ->url('https://haris.egproo.com/', shouldOpenInNewTab: true)
                ->icon('heroicon-o-presentation-chart-line')
				->group('وصول سريع')
                ->sort(1),
            NavigationItem::make('addservice')->label('حجز خدمة جديدة')
                ->url('https://haris.egproo.com/services', shouldOpenInNewTab: true)
                ->icon('heroicon-o-plus-circle')
				->group('وصول سريع')
                ->sort(1),				
			])			
			->font('Almarai')
			->sidebarCollapsibleOnDesktop()
			->databaseNotifications()
			->databaseNotificationsPolling('160s')			
            ->login(Login::class)
            ->registration(Register::class)
			->profile()
			->colors([
                'primary' => Color::Red,
            ])
            ->discoverResources(in: app_path('Filament/Dashboard/Resources'), for: 'App\\Filament\\Dashboard\\Resources')
            ->discoverPages(in: app_path('Filament/Dashboard/Pages'), for: 'App\\Filament\\Dashboard\\Pages')
            ->pages([
                //Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Dashboard/Widgets'), for: 'App\\Filament\\Dashboard\\Widgets')
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
				OTPDashVerification::class,
            ])->authGuard('dashboard');
    }
}
