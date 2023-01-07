<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainComponent extends Component
{

    public $hostname = 'Basel';

    public $telnet;

    public $telnet_pw = 'cisco';

    public $console;

    public $console_pw = 'cisco';

    public $enable;

    public $enable_pw = 'class';

    public $enable_msg = 'Authorized Access Only!';

    public $internet_interface;

    public $internet_interface_id;

    public $passive_interface;

    public $passive_interface_id;

    public $ospf_enabled;

    public $ipv6;

    public $interface_bag;

    protected $listeners = [
        'main_updated',
        'interface_updated',
        'general_updated'
    ];

    public function render()
    {
        return view('livewire.main-component');
    }

    public function mount()
    {
        $this->interface_bag = collect([
            0 => [
                'id' => '1',
                'type' => 'Serial',
                'if_id' => '0/0/1',
                'description' => '',
                'ipv4_address' => '',
                'subnet' => '',
                'ip_helper' => '',
                'ipv6_address' => '::1',
                'bandwidth' => '',
                'clock_rate' => ''
            ],
        ]);
    }

    public function add_if()
    {
        $this->interface_bag = collect($this->interface_bag)->add(
            collect([
                'id' => count($this->interface_bag) + 1,
                'type' => 'Serial',
                'if_id' => '0/0/1',
                'description' => '',
                'ipv4_address' => '',
                'subnet' => '',
                'ip_helper' => '',
                'ipv6_address' => '::1',
                'bandwidth' => '',
                'clock_rate' => ''
            ])
        );

        $this->emit('interface_updated', $this->interface_bag);
    }

    public function reset_if()
    {
        $this->interface_bag = collect([
            0 => [
                'id' => '1',
                'type' => 'Serial',
                'if_id' => '0/0/1',
                'description' => '',
                'ipv4_address' => '',
                'subnet' => '',
                'ip_helper' => '',
                'ipv6_address' => '::1',
                'bandwidth' => '',
                'clock_rate' => ''
            ],
        ]);

        $this->emit('interface_updated', $this->interface_bag);
    }

    public function interface_updated($interface_bag)
    {
        $this->interface_bag = $interface_bag;
    }

    public function general_updated($passive_interface, $passive_interface_id, $internet_interface, $internet_interface_id, $ospf_enabled, $ipv6)
    {
        $this->passive_interface = $passive_interface;
        $this->passive_interface_id = $passive_interface_id;
        $this->internet_interface = $internet_interface;
        $this->internet_interface_id = $internet_interface_id;
        $this->ospf_enabled = $ospf_enabled;
        $this->ipv6 = $ipv6;
    }

    public function main_updated($hostname, $telnet, $telnet_pw, $console, $console_pw, $enable, $enable_pw, $enable_msg)
    {
            $this->hostname = $hostname;
            $this->telnet = $telnet;
            $this->telnet_pw = $telnet_pw;
            $this->console = $console;
            $this->console_pw = $console_pw;
            $this->enable = $enable;
            $this->enable_pw = $enable_pw;
            $this->enable_msg = $enable_msg;
    }
}
