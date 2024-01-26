<div class="p-10 overflow-x-auto">

    <div class="flex items-center justify-between">
        <h1 class="mb-5 text-xl font-semibold">
            Some Posts
        </h1>
        <a href="/create-new-post" class="px-5 py-1 text-sm bg-gray-200 rounded-md shadow-md">Create Some Post</a>
    </div>
    <table class="min-w-full text-sm bg-white">
        <thead class="bg-green-200">
            <tr class="text-left">
                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Title</th>
                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Content</th>
                <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                    Actions
                </th>
            </tr>
        </thead>

        <tbody class="divide-y ">
            @foreach ($posts as $post)
            <livewire:post-row :key="$post->id" :$post />
            @endforeach
        </tbody>
    </table>
</div>
