<?php

namespace App\Http\Livewire;

class GeneralComponent extends MainComponent
{
    public function render()
    {
        return view('livewire.general-component');
    }

    public function updated()
    {
        $this->emit('general_updated',
            $this->passive_interface,
            $this->passive_interface_id,
            $this->internet_interface,
            $this->internet_interface_id,
            $this->ospf_enabled,
            $this->ipv6
        );
    }
}
