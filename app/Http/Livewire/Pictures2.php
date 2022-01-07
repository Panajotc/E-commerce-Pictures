<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pictures2 extends Component
{
    public $imag;
    public $name;
    public function mount($name,$imag){
        $this->imag1=$imag;
        $this->name1=$name;
    }
    public function render()
    {
        return view('livewire.pictures2');
    }
}
