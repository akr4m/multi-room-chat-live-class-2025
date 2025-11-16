<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RoomMessageForm extends Form
{
    #[Validate(['required', 'string', 'max:1000'])]
    public string $body = '';
}
