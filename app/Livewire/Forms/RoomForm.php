<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RoomForm extends Form
{
    #[Validate(['required', 'string', 'max:255'])]
    public string $name = '';

    #[Validate(['required', 'string', 'max:255', 'alpha_dash'])]
    public string $slug = '';

    #[Validate(['nullable', 'string', 'max:1000'])]
    public ?string $description = null;

    #[Validate(['required', 'in:public,private'])]
    public string $type = 'public';
}
