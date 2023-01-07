<?php

namespace App\Http\Livewire;

class InterfacesComponent extends MainComponent
{

    public $subnet = 24;

    public $subnet_mask = '255.255.255.0';

    public function render()
    {
        return view('livewire.interfaces-component');
    }

    public function updated()
    {
        $this->emit('interface_updated', $this->interface_bag);
    }

    public function updatedSubnet($newValue)
    {
        if ($newValue >= 0) {

        $number = [];
        $i = 0;
        while ($i < 4) {
            if ($newValue - 8 >= 0) {
                $number [] = 255;
                $newValue -= 8;
            } else {
                $number [] = 256-pow(2, 8-$newValue);
                $newValue = 0;
            }
            $i++;
        }
        $this->subnet_mask = implode('.',$number);
        }
    }

}
