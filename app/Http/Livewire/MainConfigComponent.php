<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainConfigComponent extends MainComponent
{

    public function render()
    {
        return view('livewire.main-config-component');
    }

    public function updated()
    {
        $this->emit('main_updated',
            $this->hostname,
            $this->telnet,
            $this->telnet_pw,
            $this->console,
            $this->console_pw,
            $this->enable,
            $this->enable_pw,
            $this->enable_msg,
        );
    }
}
