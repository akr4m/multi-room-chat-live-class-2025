<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="max-w-3xl w-full mx-auto">
            @livewire('dashboard-header')
            @livewire('room-list')
        </div>
    </div>


</x-layouts.app>
