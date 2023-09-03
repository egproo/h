<?php

namespace App\Providers\Filament;
use Filament\Http\Middleware\Authenticate;
use App\Http\Middleware\OTPVerification;
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
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationItem;
use App\Filament\Panel\Pages\Login;
use App\Filament\Panel\Pages\Register;
use Njxqlus\FilamentProgressbar\FilamentProgressbarPlugin;

class PanelPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('panel')
            ->path('panel')
			->font('Almarai')
			->favicon(asset('images/Harees-Final.png'))
			->sidebarCollapsibleOnDesktop()
			->databaseNotifications()
			->databaseNotificationsPolling('160s')
			->breadcrumbs(false)
            ->colors([
                'primary' => Color::Amber,
            ])
			->plugins([
			 FilamentProgressbarPlugin::make()->color('#ffbf00')
			])
            ->discoverResources(in: app_path('Filament/Panel/Resources'), for: 'App\\Filament\\Panel\\Resources')
            ->discoverPages(in: app_path('Filament/Panel/Pages'), for: 'App\\Filament\\Panel\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Panel/Widgets'), for: 'App\\Filament\\Panel\\Widgets')
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
				OTPVerification::class,
            ])
			->authGuard('panel')
			->login(Login::class)->registration(Register::class);
    }
}
