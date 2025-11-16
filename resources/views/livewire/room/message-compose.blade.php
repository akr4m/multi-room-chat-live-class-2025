 <form wire:submit="submit" class="flex items-start space-x-4">
     <div class="shrink-0">
         <flux:avatar name="{{auth()->user()->initials()}}" />
     </div>
     <div class="min-w-0 flex-1">
         <div class="relative">
             <div class="rounded-lg bg-white outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 dark:bg-white/5 dark:outline-white/10 dark:focus-within:outline-indigo-500">
                 <label for="body" class="sr-only">Add your comment</label>
                 <textarea wire:model="form.body" id="body" name="body" rows="3" placeholder="Add your comment..." class="block w-full resize-none bg-transparent px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:text-white dark:placeholder:text-gray-500"></textarea>

                 <!-- Spacer element to match the height of the toolbar -->
                 <div aria-hidden="true" class="py-2">
                     <!-- Matches height of button in toolbar (1px border + 36px content height) -->
                     <div class="py-px">
                         <div class="h-9"></div>
                     </div>
                 </div>

                 @error('form.body') <span class="error mt-2 text-red-500 px-2 py-1.5">{{ $message }}</span> @enderror
             </div>

             <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pr-2 pl-3">
                 <div class="flex items-center space-x-5">
                     <div class="flex items-center">
                         <button type="button" class="-m-2.5 flex size-10 items-center justify-center rounded-full text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-white">
                             <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5">
                                 <path d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" fill-rule="evenodd" />
                             </svg>
                             <span class="sr-only">Attach a file</span>
                         </button>
                     </div>
                 </div>
                 <div class="shrink-0">
                     <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">Send</button>
                 </div>
             </div>
         </div>
     </div>
 </form>
