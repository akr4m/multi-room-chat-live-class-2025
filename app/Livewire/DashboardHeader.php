<?php

namespace App\Livewire;

use App\Livewire\Forms\RoomForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardHeader extends Component
{
    public bool $createRoomModal = false;

    public RoomForm $form;

    public function submit()
    {
        $this->form->validate();

        $room = Auth::user()->rooms()->create($this->form->only('name', 'slug', 'description', 'type'));

        $this->createRoomModal = false;

        $this->redirectRoute('rooms.show', $room);
    }

    public function render()
    {
        return view('livewire.dashboard-header');
    }
}
