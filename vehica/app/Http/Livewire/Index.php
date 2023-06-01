<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $changeBg;
    protected $listeners = [
        'scroll' => 'scroll'
    ];

    public function scroll()
    {
        $this->changeBg = $this->bgNew;
    }

    public function render()
    {
        return view('livewire.index');
    }
}
