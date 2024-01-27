<?php

namespace App\Livewire;

use DateTime;
use App\Models\Post;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Validator;

class FormNewPost extends Component
{
    // #[Validate([
    //     'title' => 'required|min:5',
    // ], message: [
    //     'title.required' => 'The title is missing.',
    //     'title.min' => 'The title is too short. It must be at least :min characters.',
    // ])]

    // #[Validate([
    //     'content' => 'required|min:10',
    // ], message: [
    //     'content.required' => 'The content is missing.',
    //     'content.min' => 'The content is too short. It must be at least :min characters.',
    // ])]
    public $title = '';
    public $content = '';

    public function save()
    {
        $validated = Validator::make(
            ['title' => $this->title, 'content' => $this->content],
            ['title' => 'required|min:3', 'content' => 'required|min:5'],
            [
                'required' => 'Bro kamu melupakan :attribute',
                'min' => ':attribute kau minimal harus :min'
            ]
        )->validate();
        Post::create($validated);
        $this->redirect('/posts');
    }
    public function render()
    {
        return view(
            'livewire.form-new-post',

        );
    }
}
