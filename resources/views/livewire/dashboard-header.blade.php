<div class="pb-4 flex items-center justify-between border-b">
    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Your Rooms</h2>
    <button type="button" wire:click="$set('createRoomModal', true)" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus-visible:outline-blue-500">Create New Room</button>

    <x-modal wire:model.live="createRoomModal">
        <form wire:submit="submit" class="px-4 py-3">
            <div class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                Create Room
            </div>

            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">

                    <div class="col-span-full">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Room name</label>
                        <div class="mt-2">
                            <input wire:model="form.name" id="name" type="text" name="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                            @error('form.name') <span class="error mt-2 text-red-500">{{ $message }}</span> @enderror

                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="slug" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Room Slug</label>
                        <div class="mt-2">
                            <input wire:model="form.slug" id="slug" type="text" name="slug" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                            @error('form.slug') <span class="error mt-2 text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900 dark:text-white">Descriprion <span class="text-gray-500 text-sm">(Optional)</span></label>
                        <div class="mt-2">
                            <textarea wire:model="form.description" id="description" name="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500"></textarea>
                            @error('form.description') <span class="error mt-2 text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <fieldset>
                            <legend class="text-sm/6 font-semibold text-gray-900 dark:text-white">Room type</legend>
                            <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-400">
                                Choose how participants can join the room.
                            </p>
                            <div class="mt-4 space-y-6 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input wire:model="form.type" id="private" type="radio" name="notification-method" checked class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 dark:border-white/10 dark:bg-white/5 dark:checked:border-indigo-500 dark:checked:bg-indigo-500 dark:focus-visible:outline-indigo-500 dark:disabled:border-white/5 dark:disabled:bg-white/10 dark:disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden" />
                                    <label for="private" class="ml-3 block text-sm/6 font-medium text-gray-900 dark:text-white">Private</label>
                                </div>
                                <div class="flex items-center">
                                    <input wire:model="form.type" id="public" type="radio" name="notification-method" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 dark:border-white/10 dark:bg-white/5 dark:checked:border-indigo-500 dark:checked:bg-indigo-500 dark:focus-visible:outline-indigo-500 dark:disabled:border-white/5 dark:disabled:bg-white/10 dark:disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden" />
                                    <label for="public" class="ml-3 block text-sm/6 font-medium text-gray-900 dark:text-white">Public</label>
                                </div>
                            </div>
                            @error('form.type') <span class="error mt-2 text-red-500">{{ $message }}</span> @enderror
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="pt-3">
                <button wire:click="$set('createRoomModal', false)" type="button" class="rounded-md bg-gray-100 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-400 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:focus-visible:outline-gray-500">Cancel</button>
                <button type="submit" class="ml-3 rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus-visible:outline-blue-500">Create Room</button>
            </div>
</div>
</x-modal>
</div>
