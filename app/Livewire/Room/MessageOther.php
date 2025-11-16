<?php

namespace App\Livewire\Room;

use App\Models\Message;
use Livewire\Component;

class MessageOther extends Component
{
    public Message $message;

    public function render()
    {
        return view('livewire.room.message-other');
    }
}
