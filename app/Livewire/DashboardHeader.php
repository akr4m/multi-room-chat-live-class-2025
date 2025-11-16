<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardHeader extends Component
{
    public bool $createRoomModal = false;

    public function render()
    {
        return view('livewire.dashboard-header');
    }
}
