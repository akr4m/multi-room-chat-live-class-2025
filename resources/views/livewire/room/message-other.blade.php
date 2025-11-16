<div class="flex space-x-3">
    <flux:avatar tooltip="{{$message->user->name}}" name="{{$message->user->initials()}}" />
    <div>
        <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">{{ $message->user->name }} <span class="text-xs/5 font-normal text-gray-500 dark:text-gray-400">· {{ $message->getHumanDate() }}</span></p>
        <div class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300">
            <p>{{ $message->body }}</p>
        </div>
    </div>
</div>
