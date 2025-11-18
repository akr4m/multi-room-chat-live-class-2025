  <div class="h-96 overflow-y-scroll border rounded-lg px-4 py-3">
      <ul class="flex sm:[overflow-anchor:none] flex-col-reverse space-y-4 space-y-reverse" role="list">
          @forelse ($messages as $message)
          @livewire('room.message', ['message' => $message], key($message->id))
          @empty
          <li class="py-5 text-center text-sm text-gray-500 dark:text-gray-400">No messages found.</li>
          @endforelse
      </ul>
      <div class="h-px sm:[overflow-anchor:auto]" x-init="$el.scrollIntoView()"></div>
  </div>
