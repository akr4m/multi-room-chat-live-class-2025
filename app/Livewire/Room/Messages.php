<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    public Room $room;

    public $messages;

    public function mount(Room $room)
    {
        $this->messages = $room->messages()->with('user')->latest()->get();
    }

    #[On('message.sent')]
    public function prependMessage($messageId)
    {
        $message = $this->room->messages()->with('user')->where('id', $messageId)->first();
        $this->messages->prepend($message);
    }

    public function render()
    {
        return view('livewire.room.messages');
    }
}
