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
use App\Models\ProvidersDoc;
use App\Models\ServicesProvider;
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
use Illuminate\Validation\Rules\Unique; // <- correct import
use Filament\Forms\Components\Field;
class Register extends Registerbase
{
public function mount(): void {
    $this->data = [
        'docs' => [],
        // 'service' => [],
        // ... other keys if needed
    ];
}
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
    if (isset($data['docs']) && is_array($data['docs'])) {
        foreach ($data['docs'] as $docFile) {
            ProvidersDoc::create([
                'provider_id' => $user->id,
                'filename' => $docFile,
                'title' => '',
            ]);
        }
    $user->load('docs');  // Refresh the docs relationship
		
    }
if (isset($data['service']) && is_array($data['service'])) {	
    foreach ($data['service'] as $service) {
        // Check if the service ID exists in the services table
        $serviceExists = Service::find((int)$service); // Assuming the model name for the services table is 'Service'

        if ($serviceExists) {
            ServicesProvider::create([
                'provider_id' => (int)$user->id,
                'services_id' => (int)$service,
                'price' => 0,
                'duration_in_minutes' => 30,
            ]);
        } else {
            // Optionally, you can handle the case where the service ID doesn't exist
            // For example, log an error or send a notification
        }
    }
}
	
        app()->bind(
            \Illuminate\Auth\Listeners\SendEmailVerificationNotification::class,
            \Filament\Listeners\Auth\SendEmailVerificationNotification::class,
        );
        event(new Registered($user));


        session()->regenerate();
        Filament::auth('panel')->login($user);

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
        return TextInput::make('phone')->label('رقم الجوال')
							->rules('unique:App\Models\Provider,phone')
							->regex('/^(?:\+966|0)(?:\d{9})$/')
							->required();
    }
	
    public function form(Form $form): Form
    {
	
        return $form
            ->schema([
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
								->required(),				
Select::make('service')
    ->multiple()
    ->label('حدد التخصصات')
    ->options(function() {
        // جلب الخدمات التي ليس لها خدمات فرعية
        $servicesWithoutSubservices = Service::whereNull('parent_id')
            ->whereDoesntHave('children') // هذا الشرط يضمن أن الخدمة ليس لها خدمات فرعية
            ->pluck('name', 'id');

        // جلب الخدمات التي لها خدمات فرعية
        $servicesWithSubservices = Service::where('parent_id', '>', 0)
            ->get()
            ->mapWithKeys(function ($service) {
                $parent = $service->parent;
                return [$service->id => "{$parent->name} - {$service->name}"];
            });

        // دمج القوائم معًا
        return $servicesWithoutSubservices->concat($servicesWithSubservices)->toArray();
    })
    ->required(),
								
								],
								'1' => [
									FileUpload::make('image')->label('الصورة الشخصية')
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
							TextInput::make('tax_number')->label('الرقم الضريبي')
								->required(),		
						],
						'1' => [

				Select::make('service')
				->label('التخصص')
    ->options(function() {
        // جلب الخدمات التي ليس لها خدمات فرعية
        $servicesWithoutSubservices = Service::whereNull('parent_id')
            ->whereDoesntHave('children') // هذا الشرط يضمن أن الخدمة ليس لها خدمات فرعية
            ->pluck('name', 'id');

        // جلب الخدمات التي لها خدمات فرعية
        $servicesWithSubservices = Service::where('parent_id', '>', 0)
            ->get()
            ->mapWithKeys(function ($service) {
                $parent = $service->parent;
                return [$service->id => "{$parent->name} - {$service->name}"];
            });

        // دمج القوائم معًا
        return $servicesWithoutSubservices->concat($servicesWithSubservices)->toArray();
    })
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

							TextInput::make('regnumber')->label('رقم التصنيف الصحي')
								->required(),
								],
								default => [],
					})
					->key('services3'),


							

							])
            ->statePath('data');
    }


    
}
