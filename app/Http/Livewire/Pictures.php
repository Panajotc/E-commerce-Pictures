<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pictures extends Component
{
    public $imag;
    public $name;
    public function mount($imag,$name){
        $this->imag1=$imag;
        $this->name1=$name;

    }
    public function render()
    {
        return view('livewire.pictures');
    }
}
