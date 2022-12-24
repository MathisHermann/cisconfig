<div x-data="{
    telnet: @entangle('telnet'),
    console: @entangle('console'),
    enable: @entangle('enable')
}">

    <section>
        <h2 class="text-2xl font-bold leading-tight text-gray-900">Grundkonfiguration</h2>
        <div class="mt-2">
            <label for="hostname"
                   class="block text-sm font-medium text-gray-700">Hostname</label>
            <div class="mt-1">
                <input wire:model="hostname" type="text" name="hostname" id="hostname" value="Basel"
                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                       placeholder="Basel">
            </div>
        </div>


        <fieldset class="space-y-8 mt-8">
            <div>
                <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                        <input
                            wire:model="telnet"
                               id="telnet" aria-describedby="telnet-description" name="telnet"
                               type="checkbox"
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="telnet" class="font-medium text-gray-700">Telnet</label>
                    </div>
                </div>
                <div
                    x-show="telnet"
                    class="mt-2">
                    <label for="telnetpw" class="block text-sm font-medium text-gray-700">Telnet
                        PW</label>
                    <div class="mt-1">
                        <input
                            wire:model="telnet_pw"
                            type="text" name="telnetpw" id="telnetpw" value="cisco"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">
                    </div>
                </div>
            </div>

            <div>

                <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                        <input
                            wire:model="console"
                            id="console" aria-describedby="console-description"
                               name="console"
                               type="checkbox"
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="console" class="font-medium text-gray-700">Console</label>
                    </div>
                </div>
                <div
                    x-show="console"
                    class="mt-2">
                    <label for="consolepw" class="block text-sm font-medium text-gray-700">Console
                        PW</label>
                    <div class="mt-1">
                        <input
                            wire:model="console_pw"
                            type="text" name="consolepw" id="consolepw" value="cisco"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">
                    </div>
                </div>
            </div>
            <div>

                <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                        <input
                            wire:model="enable"
                            id="enable" aria-describedby="enable-description" name="enable"
                               type="checkbox"
                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="enable" class="font-medium text-gray-700">Enable</label>
                    </div>
                </div>
                <div
                    x-show="enable"
                    class="mt-2 space-y-2">
                    <label for="enablepw" class="block text-sm font-medium text-gray-700">Enable
                        PW</label>
                    <div class="mt-1">
                        <input
                            wire:model="enable_pw"
                            type="text" name="enablepw" id="enablepw" value="class"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">
                    </div>
                    <label for="enablemessage" class="block text-sm font-medium text-gray-700">Enable
                        Message</label>
                    <div class="mt-1">
                        <input
                            wire:model="enable_msg"
                            type="text" name="enablemessage" id="enablemessage"
                               value="Authorized Access only"
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
</div>
