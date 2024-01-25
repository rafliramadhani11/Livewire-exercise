<div>
    Youre Todo's : {{ $todo }}
    <div>
        <form wire:submit="add">
            <input wire:model.live="todo" type="text" class="px-2 py-1 border border-gray-300 rounded-md me-2">
            <button type="submit" class="px-4 py-1 rounded-md bg-slate-400">add</button>
        </form>
    </div>


    <ul class="mt-3 ms-3">
        @if (empty($todos))
        <p class="text-red-400">Nothing todo yet</p>
        @else
        <ul>
            @foreach($todos as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
        @endif

    </ul>
</div>
