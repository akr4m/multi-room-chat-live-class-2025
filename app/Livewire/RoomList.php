<?php

namespace App\Livewire;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RoomList extends Component
{
    public $rooms;

    public function mount()
    {
        $this->rooms = Room::query()
            ->whereBelongsTo(Auth::user())
            ->latest()
            ->get();

        // $this->rooms = Auth::user()
        //     ->rooms()
        //     ->latest()
        //     ->get();
    }

    public function render()
    {
        return view('livewire.room-list');
    }
}
