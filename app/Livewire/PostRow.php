<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Locked;

class PostRow extends Component
{
    public $post;
    public function archive()
    {
        $this->post->archive();
    }
    public function unarchive()
    {
        $this->post->unarchive();
    }
    public function render()
    {
        return view('livewire.post-row');
    }
}
