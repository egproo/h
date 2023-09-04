<div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
    <div class="overflow-y-auto h-64 mb-4 space-y-2">
        @foreach($messages as $message)
            <div class="{{ $message->user_id ? 'bg-blue-100 dark:bg-blue-800 p-3 rounded-tl-lg rounded-br-lg ml-10' : 'bg-green-100 dark:bg-green-800 p-3 rounded-tr-lg rounded-bl-lg mr-10' }}">
                <strong class="text-gray-800 dark:text-gray-200">{{ $message->provider_id ? $message->provider->name : $message->user->name }}:</strong>
                <p class="mt-1 text-gray-600 dark:text-gray-400">{{ $message->content }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        <textarea class="w-full p-3 rounded-lg border dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" wire:model="newMessage" placeholder="أكتب رسالتك هنا..."></textarea>
        <button wire:click="sendMessage" class="mt-2 w-full bg-blue-500 hover:bg-blue-600 p-2 rounded-lg transition duration-150 text-black dark:text-white">إرسال</button>
    </div>
</div>
