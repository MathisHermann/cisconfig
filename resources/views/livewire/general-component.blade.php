<div x-data="{
    ipv6: @entangle('ipv6'),
    ospf: @entangle('ospf_enabled'),
    internet_interface: @entangle('internet_interface'),
    passive_interface: @entangle('passive_interface')
    }">
    <section class="mt-16">
        <h2 class="text-2xl font-bold leading-tight text-gray-900">General</h2>
        <fieldset class="space-y-8 mt-8">
            <div>
                <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                        <input
                            wire:model="internet_interface"
                            id="enableinternetinterface"
                               aria-describedby="enableinternetinterface-description"
                               name="enableinternetinterface"
                               type="checkbox"
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="enableinternetinterface"
                               class="font-medium text-gray-700">Internet Interface</label>
                    </div>
                </div>
                <div
                    x-show="internet_interface"
                    class="mt-2">
                    <label for="internetinterface"
                           class="block text-sm font-medium text-gray-700">Internet
                        Interface</label>
                    <div class="mt-1">
                        <input
                            wire:model="internet_interface_id"
                            type="text" name="internetinterface" id="internetinterface"
                               value="FastGigaEthernet 100000"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">
                    </div>
                </div>
            </div>
            <div>
                <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                        <input
                            wire:model="passive_interface"
                            id="enablepassiveinterface"
                               aria-describedby="enablepassiveinterface-description"
                               name="enablepassiveinterface"
                               type="checkbox"
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="enablepassiveinterface"
                               class="font-medium text-gray-700">Passive Interface</label>
                    </div>
                </div>
                <div
                    x-show="passive_interface"
                    class="mt-2">
                    <label for="passiveinterface"
                           class="block text-sm font-medium text-gray-700">Passive
                        Interface</label>
                    <div class="mt-1">
                        <input
                            wire:model="passive_interface_id"
                            type="text" name="passiveinterface" id="passiveinterface"
                               value="FastGigaEthernet 100000"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">
                    </div>
                </div>
            </div>
            <div>

                <div class="mt-2">
                    <div class="mt-1">
                        <div class="relative flex items-start">
                            <div class="flex h-5 items-center">
                                <input
                                    wire:model="ospf_enabled"
                                    id="ospf" aria-describedby="enable-description"
                                       name="ospf"
                                       type="checkbox"
                                       class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="ospf"
                                       class="font-medium text-gray-700">OSPF</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>

                <div class="mt-2">
                    <div>

                        <div class="relative flex items-start">
                            <div class="flex h-5 items-center">
                                <input
                                    wire:model="ipv6"
                                    id="ipv6" aria-describedby="ipv6-description"
                                       name="ipv6"
                                       type="checkbox"
                                       class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="ipv6" class="font-medium text-gray-700">IPv6</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
</div>
