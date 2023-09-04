<?php

namespace App\Filament\Panel\Resources\AppointmentResource\Pages;

use App\Filament\Panel\Resources\AppointmentResource;
use App\Models\Appointment;
use Filament\Facades\Filament;
use Filament\Resources\Pages\Page;
use Filament\Notifications\Notification;
use App\Models\User;
use App\Models\Service;
use App\Models\Provider;
use App\Models\ServicesSession;
use App\Models\PaymentAttempt;
use App\Models\Admin;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Session;
class ViewAppointment extends Page
{
    protected static string $resource = AppointmentResource::class;
    protected static string $view = 'filament.panel.resources.appointment-resource.pages.view-appointment';

    protected $appointment;

    protected static ?string $title = null;

    protected ?string $heading = "";

    protected ?string $subheading = "";
	
    /**
     * Mount the component.
     *
     * @param  int  $record
     * @return void
     */
    public function mount($record)
    {
        // Load the appointment with related service and provider details
		
    $this->appointment = Appointment::with(['service', 'user','provider','paymentAttempt'])->findOrFail($record);
    }

    /**
     * Get the data that should be passed to the view.
     *
     * @return array
     */
    protected function getViewData(): array
    {
        return [
            'appointment' => $this->appointment,
			'duration' => $this->appointment->service->getDurationForProvider($this->appointment->provider->id)
        ];
    }
}
