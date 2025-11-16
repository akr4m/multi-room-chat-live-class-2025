<div class="col-span-4 p-4 rounded-md shadow-sm border bg-white">
    <h2 class="text-lg font-medium">Users</h2>

    <ul role="list" class="divide-y mt-4 divide-gray-100 dark:divide-white/5">
        @for ($i = 0; $i < 3; $i++)
            <li class="flex gap-x-2.5 py-3.5">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 flex-none rounded-full bg-gray-50 dark:bg-gray-800 dark:outline dark:-outline-offset-1 dark:outline-white/10" />
            <div class="min-w-0">
                <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">Leslie Alexander</p>
                <p class="truncate text-xs/5 text-gray-500 dark:text-gray-400">leslie.alexander@example.com</p>
            </div>
            </li>
            @endfor
    </ul>

</div>
