<div>
    <div class="flex p-10">
        <div>
            <p>Title : </p>
            <input wire:model="title" type="text" class="inline-block px-3 py-1 border border-gray-900 rounded-md shadow-sm ms-3">
            @error('title')
            <span> {{ $message }} </span>
            @enderror
        </div>
        <div>
            <p>Content : </p>
            <input wire:model="content" type="text" class="px-3 py-1 border border-gray-900 rounded-md shadow-sm ms-3">
            @error('content')
            <em class="inline"> {{ $message }} </em>
            @enderror
        </div>
    </div>
    <div class="px-10">
        <button wire:click="save" type="submit" class="px-5 py-1 bg-gray-200 rounded-md shadow-sm ms-3">Save</button>
    </div>
</div>
