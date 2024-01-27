<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Locked;

class Posts extends Component
{
    public function delete(Post $post)
    {
        $post->delete();
    }
    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::all()
        ]);
    }
}
