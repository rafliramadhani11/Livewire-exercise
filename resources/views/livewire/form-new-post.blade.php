<div>

    <div class="flex p-10">
        <form wire:submit="save">
            <div>
                <p>Title : </p>
                <input wire:model.live="title" type="text" class="inline-block px-3 py-1 border border-gray-900 rounded-md shadow-sm ms-3">
                @error('title')
                <em> {{ $message }} </em>
                @enderror
            </div>
            <div>
                <p>Content : </p>
                <input wire:model.live="content" type="text" class="px-3 py-1 border border-gray-900 rounded-md shadow-sm ms-3">
                @error('content')
                <em class="inline"> {{ $message }} </em>
                @enderror
            </div>
            <div class="px-10">
                <button type="submit" class="px-5 py-1 bg-gray-200 rounded-md shadow-sm ms-3">Save</button>
            </div>
        </form>
    </div>
</div>
