<?php

namespace App\Enums;

enum RoomType: string
{
    case PUBLIC = 'public';
    case PRIVATE = 'private';

    public function label(): string
    {
        return match ($this) {
            self::PUBLIC => 'Public',
            self::PRIVATE => 'Private',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::PUBLIC => '#28a745',
            self::PRIVATE => '#dc3545',
        };
    }
}
