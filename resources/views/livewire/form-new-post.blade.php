<div>

    <div class="flex p-10">
        <form wire:submit="save">
            <div>
                <p>Title : </p>
                <input wire:model="title" type="text" class="inline-block px-3 py-1 border border-gray-900 rounded-md shadow-sm ms-3">
                <div class="mt-1 text-xs ms-3">Title Length : <span x-text="$wire.title.length"></span></div>
                @error('title')
                <div>
                    <em class="text-sm text-red-500"> {{ $message }} </em>
                </div>
                @enderror
            </div>
            <div class="mt-5">
                <p>Content : </p>
                <input wire:model="content" type="text" class="px-3 py-1 border border-gray-900 rounded-md shadow-sm ms-3">
                <div class="mt-1 text-xs ms-3">Content Length : <span x-text="$wire.content.length"></span></div>
                @error('content')
                <div>
                    <em class="text-sm text-red-500"> {{ $message }} </em>
                </div>
                @enderror
            </div>
            <div class="mt-5">
                <button type="submit" class="px-5 py-1 bg-gray-200 rounded-md shadow-sm ms-3">Save</button>
            </div>
        </form>
    </div>
</div>
