<x-filament-panels::page>
    @livewire('database-notifications')
    @livewire('notifications')

    <div class="container mx-auto p-4 space-y-6">
        <!-- تفاصيل الموعد -->
        <div class="p-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6 transition-colors duration-300">
            <!-- معلومات موفر الخدمة -->
            <div class="flex-shrink-0 space-y-2 text-center">
			    <h2 class="text-sm text-gray-600 dark:text-gray-400">العميل<h2>
                <div class="w-12 h-12 relative mx-auto">
                    <img style="width: 120px;text-align: center;margin: 0 auto;" src="{{url('/')}}/storage/{{ $appointment->user->image }}" alt="{{ $appointment->user->name }}" class="w-full h-20 rounded-full object-cover shadow-md">
                </div>
                <h3 class="mt-2 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $appointment->user->name }}</h3>
            </div>

            <!-- معلومات الخدمة المطلوبة -->
            <div class="flex-grow space-y-2 pl-6 text-center md:border-l-2 border-gray-200 dark:border-gray-600">
						    <h2 class="text-sm text-gray-600 dark:text-gray-400">الخدمة المطلوبة<h2>
                <div class="w-12 h-12 relative mx-auto">
                    <img style="width: 120px;text-align: center;margin: 0 auto;" src="{{url('/')}}/storage/{{ $appointment->service->image }}" alt="{{ $appointment->service->name }}" class="w-full h-20 rounded-full object-cover shadow-md">
                </div>
                <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $appointment->service->full_service_name }}</h3>
                <p class="text-gray-600 dark:text-gray-400">السعر الإجمالي: <span class="font-medium">{{ $appointment->paymentAttempt->total }} ر.س</span></p>
                <p class="text-gray-600 dark:text-gray-400">الموعد: <span class="font-medium">{{ $appointment->appointment_date }}</span> الساعة : {{ $appointment->session->start_time }}</p>
            </div>
        </div>

        <!-- المحادثة حول الموعد -->
        <div class="p-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg transition-colors duration-300">
            @livewire('appointmentp-chat', ['appointmentId' => $appointment->id])
        </div>
    </div>
</x-filament-panels::page>
