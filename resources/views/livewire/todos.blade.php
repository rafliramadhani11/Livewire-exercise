<div class="p-10">
    Youre Todo's : {{ $todo }}
    <div>
        <form wire:submit="add">
            <input wire:model="todo" type="text" class="px-2 py-1 border border-gray-300 rounded-md me-2">
            <button type="submit" class="px-4 py-1 rounded-md bg-slate-400">add</button>
        </form>
    </div>
    @if (empty($todos))
    <p class="text-red-400">Nothing todo yet</p>
    @else
    <ul class="mt-3 list-disc ms-8">
        @foreach($todos as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
    @endif
</div>
