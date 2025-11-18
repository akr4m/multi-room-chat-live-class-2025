<?php

namespace App\Livewire\Room;

use App\Events\MessageCreated;
use App\Livewire\Forms\RoomMessageForm;
use App\Models\Message;
use App\Models\Room;
use Livewire\Component;

class MessageCompose extends Component
{
    public Room $room;

    public RoomMessageForm $form;

    public function submit()
    {
        $this->form->validate();

        // $message = $this->room->messages()->create([
        //     'user_id' => auth()->id(),
        //     'body' => $this->form->body,
        // ]);

        $message = Message::make($this->form->only('body'));
        $message->user()->associate(auth()->user());
        $message->room()->associate($this->room);
        $message->save();

        $this->form->reset();

        $this->dispatch('message.sent', $message->id);

        broadcast(new MessageCreated($this->room, $message))->toOthers();
    }

    public function render()
    {
        return view('livewire.room.message-compose');
    }
}
