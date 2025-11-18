<?php

namespace App\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Users extends Component
{
    public Room $room;

    public array $ids = [];

    public array $typingIds = [];

    #[Computed()]
    public function users()
    {
        return User::whereIn('id', $this->ids)->get();
    }

    #[On('echo-presence:chat.room.{room.id},here')]
    public function setUsersHere($users)
    {
        $this->ids = Arr::pluck($users, 'id');
    }

    #[On('echo-presence:chat.room.{room.id},joining')]
    public function setUsersJoining($user)
    {
        if (in_array($user['id'], $this->ids)) {
            return;
        }

        $this->ids[] = $user['id'];
    }

    #[On('echo-presence:chat.room.{room.id},leaving')]
    public function setUsersLeaving($user)
    {
        $this->ids = array_filter($this->ids, fn ($id) => $id !== $user['id']);
    }

    public function render()
    {
        return view('livewire.room.users');
    }
}
