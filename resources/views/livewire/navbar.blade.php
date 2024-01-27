<div>
    <nav class="flex items-center justify-around px-10 py-5 border rounded-md shadow-sm border-b-gray-500">
        <a href="/" wire:navigate @class(['text-blue-500'=> request()->is('/')])>Todos</a>
        <a href="/counter" wire:navigate @class(['text-blue-500'=> request()->is('counter')])>Counter</a>
        <a href="/posts " wire:navigate @class(['text-blue-500'=> request()->is('posts')])>Post</a>
    </nav>
</div>
