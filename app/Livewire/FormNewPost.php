<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;

class FormNewPost extends Component
{
    #[Rule('required', message: 'Isi Title nya dlu broo')]
    public $title = '';
    #[Rule('required', message: 'Isi Content nya dlu broo')]
    public $content = '';

    public function save()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        $this->redirect('/posts');
    }
    public function render()
    {
        return view('livewire.form-new-post');
    }
}
