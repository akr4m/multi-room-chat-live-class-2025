<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="max-w-3xl w-full mx-auto">
            <div class="pb-4 flex items-center justify-between border-b">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Your Rooms</h2>
                <a href="#" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus-visible:outline-blue-500">Create New Room</a>
            </div>
            <ul role="list" class="divide-y divide-gray-100 dark:divide-white/5">
                @for ($i = 0; $i < 5; $i++)
                    <li class="flex items-center justify-between gap-x-6 py-5">
                    <div class="min-w-0">
                        <div class="flex items-start gap-x-3">
                            <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">Room #{{ $i+1 }}</p>
                            <p class="mt-0.5 rounded-md bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 inset-ring inset-ring-green-600/20 dark:bg-green-400/10 dark:text-green-400 dark:inset-ring-green-500/20">Private</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2 text-xs/5 text-gray-500 dark:text-gray-400">
                            <p class="whitespace-nowrap">Created at <time datetime="2023-03-17T00:00Z">March 17, 2025</time></p>
                            <svg viewBox="0 0 2 2" class="size-0.5 fill-current">
                                <circle r="1" cx="1" cy="1" />
                            </svg>
                            <p class="truncate">Created by Leslie Alexander</p>
                        </div>
                    </div>
                    <div class="flex flex-none items-center gap-x-4">
                        <a href="#" class="hidden rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:block dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">View room</a>
                    </div>
                    </li>
                    @endfor
            </ul>
        </div>
    </div>
</x-layouts.app>
