<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Comp extends Component
{
    public string $name;

    public function render(): View
    {
        return view('livewire.comp');
    }

    // public function okFrase(): string
    // {
    //     return $this->name;
    // }

    // public function getTextProperty(): string
    // {
    //     return 'Isso é um texto';
    // }

    public function send()
    {
        $this->emitTo(Todo::class, 'mudarName', ['name' => $this->name]);
    }
}
