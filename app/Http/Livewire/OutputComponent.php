<?php

namespace App\Http\Livewire;

class OutputComponent extends MainComponent
{

    public $main_commands;

    public $interface_commands;

    public $general_commands;

    public function render()
    {
        return view('livewire.output-component');
    }

    public function mount()
    {
        $this->main_commands = [];
        $this->interface_commands = [];
        $this->general_commands = [];
    }

    public function generate()
    {
        $this->main_commands = $this->main_config();
        $this->interface_commands = $this->if_config();
        $this->general_commands = $this->general_config();
    }

    public function main_config()
    {

        $main_config = [];

        if (!blank($this->hostname))
            $main_config[] = ['hostname ' . $this->hostname];

        if ($this->console)
            $main_config[] = [
                'line console 0',
                'password ' . $this->console_pw,
            ];

        if ($this->enable)
            $main_config[] = [
                'enable password ' . $this->enable_pw,
                'banner motd "',
                $this->enable_msg,
                '"'
            ];
        if ($this->telnet)
            $main_config[] = [
                'line vty 0 4',
                'password ' . $this->telnet_pw,
                'transport input telnet',
            ];

        return $main_config;

    }

    public function if_config()
    {

        $interfaces = [];

        if (!blank($this->interface_bag)) {
            foreach ($this->interface_bag as $interface) {
                $if = [];

                $if[] = 'interface ' . $interface['type'] . $interface['if_id'];
                $if[] = 'ip address ' . $interface['ipv4_address'] . ' ' . $interface['subnet'];
                if($this->ospf_enabled)
                    $if[] = 'ip ospf area 1';

                if($this->ipv6) {
                $if[] = 'ipv6 address ' . $interface['ipv6_address'] . '/64';
                    if($this->ospf_enabled)
                        $if[] = 'ipv6 ospf area 1';
                }

                if ($interface['bandwidth'] > 0)
                    $if[] = 'bandwidth ' . $interface['bandwidth'];

                if ($interface['clock_rate'] > 0)
                    $if[] = 'clock rate ' . $interface['clock_rate'];

                $if[] = 'no shutdown';

                $interfaces[] = $if;

            }
        }
//        dd($interfaces);
        return $interfaces;
    }

    public function general_config()
    {

        $gen_config = [];

        if ($this->ipv6)
            $gen_config[] = 'ipv6 unicast-routing';

        if ($this->passive_interface)
            $gen_config[] = 'passive-interface ' . $this->passive_interface_id;

        if ($this->internet_interface) {
            $gen_config[] = 'ip route 0.0.0.0 0.0.0.0 ' . $this->internet_interface_id;
            $gen_config[] = 'default-information originate';
        }

        if ($this->ospf_enabled)
            $gen_config[] = 'router ospf 1';


        return [
            $gen_config
        ];


    }

}
