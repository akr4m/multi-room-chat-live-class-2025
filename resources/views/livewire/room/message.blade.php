<li>
    @if($message->isOwn())
    @livewire('room.message-own', ['message' => $message], key('own-'.$message->id))
    @else
    @livewire('room.message-other', ['message' => $message], key('other-'.$message->id))
    @endif
</li>
