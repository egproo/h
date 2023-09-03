<x-filament-panels::page>
    @livewire('database-notifications')
    @livewire('notifications')

    <div class="container mx-auto p-4 space-y-6">
        <!-- تفاصيل الموعد -->
        <div class="p-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6 transition-colors duration-300">
            <!-- معلومات موفر الخدمة -->
            <div class="flex-shrink-0 space-y-2 text-center">
			    <h2 class="text-sm text-gray-600 dark:text-gray-400">مقدم طلب الدعم<h2>
                <div class="w-12 h-12 relative mx-auto">
                    <img style="width: 120px;text-align: center;margin: 0 auto;" src="{{url('/')}}/storage/{{ $ticket->client->image }}" alt="{{ $ticket->client->name }}" class="w-full h-20 rounded-full object-cover shadow-md">
                </div>
                <h3 class="mt-2 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $ticket->client->name }}</h3>
            </div>
					
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6 transition-colors duration-300">
		    <div class="flex-shrink-0 space-y-2 text-center">
			    <h2 class="text-sm text-gray-600 dark:text-gray-400">تفاصيل تذكرة الدعم<h2>
                <div class="w-12 h-12 relative mx-auto">
                <h3 class="mt-2 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $ticket->title }}</h3>
                </div>
                <h3 class="mt-2 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $ticket->description }}</h3>
            </div>
					
        </div>		


        <!-- المحادثة حول الموعد -->
        <div class="p-4 bg-white dark:bg-gray-800 shadow-lg rounded-lg transition-colors duration-300">
            @livewire('ticket-chat', ['ticketId' => $ticket->id])
        </div>
    </div>
</x-filament-panels::page>
