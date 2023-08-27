<?php

namespace App\Filament\Panel\Pages;

use Filament\Pages\Page;
use Filament\Pages\Auth\Register as Registerbase;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Facades\Filament;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use App\Models\Service;
use App\Models\ServicesType;
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
use Filament\Forms\Get;
use Filament\Forms\Components\Grid;
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
			                                Forms\Components\FileUpload::make('image')
                                    ->label('صورة الملف الشخصي')
                                    ->image()
                                    ->disableLabel(),
								$this->getNameFormComponent(),
								$this->getPhoneFormComponent(),
								$this->getPasswordFormComponent(),
						TextInput::make('identification')->type('number')->maxLength(14)->minLength(14)->label('رقم الهوية')->required(),


								
				Select::make('type')->label('نوع الحساب')
					->options([
						'1' => 'فرد',
						'2' => 'مؤسسة',
					])
					->live()->required()
					->afterStateUpdated(fn (Select $component) => $component
						->getContainer()
						->getComponent('services')
						->getChildComponentContainer()
						->fill()),
				Grid::make(1)
					->schema(fn (Get $get): array => match ($get('type')) {
						'2' => [
						TextInput::make('title')->label('إسم المؤسسة')->required(),
							FileUpload::make('image')->label('شعار المؤسسة')
								->image()
								->required(),				
								Select::make('service')->multiple()
								->label('حدد التخصصات')
								->options(Service::where('parent_id','>',0)->pluck('name', 'id'))
								->required(),								
								],
								'1' => [
									FileUpload::make('image')->label('الصورة الشخصية')
										->image()
										->required(),		

								],
								default => [],
					})
					->key('services'),
				Grid::make(2)
					->schema(fn (Get $get): array => match ($get('type')) {
						'2' => [
							TextInput::make('register_number')->label('رقم السجل التجاري')
								->required(),
							TextInput::make('register_number')->label('الرقم الضريبي')
								->required(),		
						],
						'1' => [

				Select::make('service')
				->label('التخصص')
				->options(Service::where('parent_id','>',0)->pluck('name', 'id'))
				->required(),
							TextInput::make('title')->label('المسمى الوظيفي')->required(),				
						],
						default => [],
					})
					->key('services2'),	
						Grid::make(1)
							->schema(fn (Get $get): array => match ($get('type')) {
								'2' => [
									FileUpload::make('docs')->label('المرفقات (سجل تجاري - بطاقة ضريبية - هوية المتعاقد)')->multiple()->required(),

								],
								'1' => [

								],
								default => [],
					})
					->key('services3'),


							

							])
            ->statePath('data');
    }


    
}
