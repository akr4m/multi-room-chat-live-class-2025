<x-layouts.app :title="__('Room Details')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $room->name }}</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">A <span class="underline font-medium">{{ $room->type->value }}</span> room created on <time datetime="2023-03-17T00:00Z">{{ $room->created_at->toDayDateTimeString() }}</time> by {{ $room->user->name }}</p>
        </div>
        <div class="grid grid-cols-12 gap-4">
            @livewire('room.users', ['room' => $room])

            <div class="col-span-8 w-full rounded-md shadow-sm border p-4 overflow-hidden bg-white">
                <div class="flex flex-col h-full justify-between space-y-4">
                    @livewire('room.messages', ['room' => $room])
                    <!-- compose message -->
                    @livewire('room.message-compose', ['room' => $room])
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
