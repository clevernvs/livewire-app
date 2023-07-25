<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Todo extends Component
{
    public string $name = '';

    protected $listeners = [
        'mudarName' => 'mudar'
    ];

    public function render(): View
    {
        return view('livewire.todo');
    }

    public function mudar($data)
    {
        $this->name = $data;
    }
}
