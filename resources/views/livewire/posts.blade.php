<div class="p-10 overflow-x-auto">
    <div x-data="{ count: 0 }">
        <button x-on:click="count--">Decrement</button>
        <span x-text="count"></span>
        <button x-on:click="count++">Increment</button>
    </div>
    <div class="flex items-center justify-between">
        <h1 class="mb-5 text-xl font-semibold">
            Some Posts
        </h1>
        <a href="/create-new-post" class="px-5 py-1 text-sm bg-gray-200 rounded-md shadow-md">Create New Post</a>
    </div>
    <table class="min-w-full mt-5 text-sm bg-white divide-y-2 divide-gray-200">
        <thead class="bg-gray-200">
            <tr class="text-left">
                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Title</th>
                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Content</th>
                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                    Actions
                </th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @foreach ($posts as $post)
            <tr>
                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $post->title }}</td>
                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                    {{ str($post->content)->words(10) }}
                </td>
                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                    <button class="inline-block px-5 py-1 text-sm font-medium text-red-600 border border-red-600 rounded hover:bg-red-600 hover:text-white focus:outline-none focus:ring active:bg-red-500" wire:click="delete({{ $post->id }})" wire:confirm="Are you sure want to delete this post ?">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
