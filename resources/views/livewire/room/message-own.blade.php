<div class="flex space-x-3 justify-end ">
    <div>
        <p class="inline-flex  w-full justify-end text-sm/6 font-semibold text-gray-900 dark:text-white"><span class="text-xs/5 mr-2 font-normal text-gray-500 dark:text-gray-400">{{ $message->getHumanDate() }}· </span>You </p>
        <div class="mt-1 text-sm/6 text-gray-700 dark:text-gray-300">
            <p>{{ $message->body }}</p>
        </div>
    </div>
    <flux:avatar tooltip="{{$message->user->name}}" name="{{$message->user->initials()}}" />
</div>
