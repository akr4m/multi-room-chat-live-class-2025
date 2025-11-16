<ul role="list" class="divide-y divide-gray-100 dark:divide-white/5">
    @forelse ($rooms as $room)
    <li class="flex items-center justify-between gap-x-6 py-5">
        <div class="min-w-0">
            <div class="flex items-start gap-x-3">
                <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">{{$room->name}}</p>
                <p class="mt-0.5 rounded-md bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 inset-ring inset-ring-green-600/20 dark:bg-green-400/10 dark:text-green-400 dark:inset-ring-green-500/20">{{ $room->type->label() }}</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2 text-xs/5 text-gray-500 dark:text-gray-400">
                <p class="whitespace-nowrap">Created at <time datetime="{{$room->created_at}}">{{$room->created_at->diffForHumans()}}</time></p>
                <svg viewBox="0 0 2 2" class="size-0.5 fill-current">
                    <circle r="1" cx="1" cy="1" />
                </svg>
                <p class="truncate">Created by {{$room->user->name}}</p>
            </div>
        </div>
        <div class="flex flex-none items-center gap-x-4">
            <a href="{{ route('rooms.show', $room) }}" class="hidden rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:block dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">View room</a>
        </div>
    </li>
    @empty
    <li class="py-5 text-center text-sm text-gray-500 dark:text-gray-400">No rooms found.</li>
    @endforelse
</ul>
