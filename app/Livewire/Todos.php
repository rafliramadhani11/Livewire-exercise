<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';
    public $todos = [];
    public $title = 'Todos';
    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos', ['title' => 'Todos']);
    }
}
