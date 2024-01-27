<tr @class(['bg-gray-200'=> $post->is_archived])>
    <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $post->title }}</td>
    <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
        {{ str($post->content)->words(10) }}
    </td>
    <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
        @unless ($post->is_archived)
        <button class="inline-block px-5 py-1 text-sm font-medium text-gray-600 border border-gray-600 rounded hover:bg-gray-600 hover:text-white focus:outline-none focus:ring active:bg-gray-500" type="button" wire:click="archive" wire:confirm="Are you sure want to archive this post ?">
            Archive
        </button>
        @endunless
        @unless (!$post->is_archived)
        <button class="inline-block px-5 py-1 text-sm font-medium text-gray-600 border border-gray-600 rounded hover:bg-gray-600 hover:text-white focus:outline-none focus:ring active:bg-gray-500" type="button" wire:click="unarchive" wire:confirm="Are you sure want to unarchive this post ?">
            Unarchive
        </button>
        @endunless
        <button class="inline-block px-5 py-1 text-sm font-medium text-red-600 border border-red-600 rounded hover:bg-red-600 hover:text-white focus:outline-none focus:ring active:bg-red-500" type="button" wire:click="$parent.delete({{ $post->id }})" wire:confirm="Are you sure want to delete this post ?
        wire:loading.attr=" disabled"">
            Delete
        </button>
    </td>
</tr>
