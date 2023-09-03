<x-filament-panels::page>
    @if ($this->hasInfolist())
        {{ $this->infolist }}
    @else
        {{ $this->form }}
    @endif

    <div class="mt-6">
        <h2 class="text-xl font-semibold">المحادثة</h2>
        <div class="mt-4 bg-gray-100 p-4 rounded-lg">
            @foreach($messages as $message)
                <div class="{{ $message->user_id ? 'bg-blue-100 p-2 rounded-l-lg ml-10' : 'bg-green-100 p-2 rounded-r-lg mr-10' }}">
                    <strong>{{ $message->user_id ? $message->user->name : $message->provider->name }}:</strong>
                    <p>{{ $message->content }}</p>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            <form wire:submit.prevent="sendMessage">
                <textarea class="w-full p-2 rounded-lg" wire:model="newMessage"></textarea>
                <button type="submit" class="mt-2 bg-blue-500 text-white p-2 rounded-lg">إرسال</button>
            </form>
        </div>
    </div>
</x-filament-panels::page>
