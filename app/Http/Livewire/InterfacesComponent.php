<?php

namespace App\Http\Livewire;

class InterfacesComponent extends MainComponent
{

    public function render()
    {
        return view('livewire.interfaces-component');
    }

    public function updated()
    {
        $this->emit('interface_updated', $this->interface_bag);
    }

}
