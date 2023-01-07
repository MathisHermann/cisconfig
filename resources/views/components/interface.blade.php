@props(['interface_bag','index'])
<div>
    <div>
        <div class="space-y-8 mt-8 bg-slate-200 p-2 rounded">
            <legend class="block mb-2 text-xl font-medium text-gray-800">Interface {{ $index + 1 }}</legend>
            {{--            <button--}}
            {{--                wire:click="remove_if({{$index }})"--}}
            {{--                type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Remove Interface</button>--}}
            <fieldset class="mt-6">
                <div class="mt-1 -space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="interfacetype" class="sr-only">Interfacetype</label>
                        <select
                            wire:model="interface_bag.{{ $index }}.type"
                            id="interfacetype" name="interfacetype"
                            class="relative block w-full rounded-none rounded-t-md border-gray-300 focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option>GigabitEthernet</option>
                            <option>FastEthernet</option>
                            <option>Serial</option>
                            <option>Loopback</option>
                        </select>
                    </div>
                    <div>
                        <label for="interfaceid" class="sr-only">ID</label>
                        <input
                            wire:model="interface_bag.{{ $index }}.if_id"
                            type="text" name="interfaceid" id="interfaceid"
                            class="relative block w-full rounded-none rounded-b-md border-gray-300 focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="id">
                    </div>
                </div>
            </fieldset>
            <fieldset class="mt-6">
                <div class="mt-1 -space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <input
                            wire:model="interface_bag.{{ $index }}.description"
                            type="text" name="description" id="description"
                            class="relative block w-full rounded-md border-gray-300 focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="WAN Y">
                    </div>
                </div>
            </fieldset>

            <div class="mt-2">
                <div class="mt-1 -space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="ipv4address"
                               class="block text-sm font-medium text-gray-700">IPv4 Address + Subnet</label>

                        <input
                            wire:model="interface_bag.{{ $index }}.ipv4_address"
                            type="text" name="ipv4address" id="ipv4address" value="127.0.0.1"
                            class="relative block w-full rounded-none rounded-t-md border-gray-300 focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="127.0.0.1">

                    </div>
                    <div>
                        <label for="ipv4addresssubnet"
                               class="sr-only">IPv4
                            Subnet</label>

                        <input
                            wire:model="interface_bag.{{ $index }}.subnet"
                            type="text" name="ipv4addresssubnet" id="ipv4addresssubnet"
                            value="255.255.255.0"
                            class="relative block w-full rounded-none rounded-b-md border-gray-300 focus:z-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="255.255.255.0">
                    </div>
                </div>
            </div>

            <div class="mt-2">
                <label for="iphelper"
                       class="block text-sm font-medium text-gray-700">IP Helper</label>

                <div class="mt-1 flex flex-row justify-between space-x-4">
                    <input
                        wire:model="interface_bag.{{ $index }}.ip_helper"
                        type="text" name="iphelper" id="iphelper" value="::1"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="192.12.12.2">

                </div>
            </div>

            <div class="mt-2">
                <label for="ipv6address"
                       class="block text-sm font-medium text-gray-700">IPv6 Address</label>

                <div class="mt-1 flex flex-row justify-between space-x-4">
                    <input
                        wire:model="interface_bag.{{ $index }}.ipv6_address"
                        type="text" name="ipv6address" id="ipv6address" value="::1"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="">

                </div>
            </div>

            <div class="mt-2">
                <label for="bandwidth"
                       class="block text-sm font-medium text-gray-700">Bandwith (Mbps)</label>

                <div class="mt-1 flex flex-row justify-between space-x-4">
                    <input
                        wire:model="interface_bag.{{ $index }}.bandwidth"
                        type="text" name="bandwidth" id="bandwidth" value="2"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="200000">

                </div>
            </div>

            <div class="mt-2">
                <label for="clock_rate"
                       class="block text-sm font-medium text-gray-700">Clock Rate (Mbps)</label>

                <div class="mt-1 flex flex-row justify-between space-x-4">
                    <input
                        wire:model="interface_bag.{{ $index }}.clock_rate"
                        type="text" name="clock_rate" id="clock_rate" value="1"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="200000">
                </div>
            </div>
        </div>
    </div>
</div>
