<?php

namespace App\Filament\Dashboard\Pages;

use Filament\Pages\Page;
use Filament\Pages\Auth\Register as Registerbase;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Facades\Filament;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\SimplePage;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
class Register extends Registerbase
{
    public function register(): ?RegistrationResponse
    {
        try {
            $this->rateLimit(2);
        } catch (TooManyRequestsException $exception) {
            Notification::make()
                ->title(__('filament-panels::pages/auth/register.notifications.throttled.title', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]))
                ->body(array_key_exists('body', __('filament-panels::pages/auth/register.notifications.throttled') ?: []) ? __('filament-panels::pages/auth/register.notifications.throttled.body', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]) : null)
                ->danger()
                ->send();

            return null;
        }

        $data = $this->form->getState();

        $user = $this->getUserModel()::create($data);

        app()->bind(
            \Illuminate\Auth\Listeners\SendEmailVerificationNotification::class,
            \Filament\Listeners\Auth\SendEmailVerificationNotification::class,
        );
        event(new Registered($user));

        Filament::auth()->login($user);

        session()->regenerate();

        return app(RegistrationResponse::class);
    }
        protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('filament-panels::pages/auth/register.form.password.label'))
            ->password()
            ->required()
            ->rules('required','أدخل كلمة مرور صعبة التخمين')
            ->dehydrateStateUsing(fn ($state) => Hash::make($state));
    }
	

    protected function getPhoneFormComponent(): Component
    {
        return TextInput::make('phone')->tel()->label('رقم الجوال')
                            ->maxValue(50)->required()
                            ->telRegex('/^(?:\+966|0)(?:\d{9})$/')
                            ->rules('required', 'regex:/^(?:\+966|0)(?:\d{9})$/', 'unique:users,phone','رقم الجوال غير صحيح أو مستخدم من قبل');
    }    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getNameFormComponent(),
                $this->getPhoneFormComponent(),
				TextInput::make('identification')->number()->maxLength(14)->minLength(14)->label('رقم الهوية')->required(),

                $this->getPasswordFormComponent(),
            ])
            ->statePath('data');
    }


    
}