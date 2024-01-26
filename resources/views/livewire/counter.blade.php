<div class="p-10">
    <h1>
        Counter is : {{ $counter }}
    </h1>
    <button wire:click="tambah" class="px-6 py-1 bg-green-400 rounded-md shadow-md">+</button>
    <button wire:click="kurang" class="px-6 py-1 bg-red-400 rounded-md shadow-md">-</button>

    <!-- ALHPINE IMPELEMENT -->
    <!-- <div x-data="{ count: 0 }">
        <button x-on:click="count--">Decrement</button>
        <span x-text="count"></span>
        <button x-on:click="count++">Increment</button>
    </div> -->
</div>
