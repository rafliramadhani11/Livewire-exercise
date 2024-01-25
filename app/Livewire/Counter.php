<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 1;
    public function tambah()
    {
        $this->counter++;
    }
    public function kurang()
    {
        $this->counter--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
