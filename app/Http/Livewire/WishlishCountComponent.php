<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlishCountComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.wishlish-count-component')->layout('layouts.base');
    }
}
