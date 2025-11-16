<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Room $room)
    {
        return view('rooms.show', compact('room'));
    }
}
