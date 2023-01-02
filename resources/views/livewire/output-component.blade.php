<div>
    <h2 class="text-2xl font-bold leading-tight text-gray-900">Grundkonfiguration</h2>
    <div class="mt-8">
        <div>
            ena
        </div>
    <x-conf
            :commands="$main_commands"
        />
    </div>
    <div>
        <x-conf
            :commands="$interface_commands"
        />
    </div>
    <div>
        <x-conf
            :commands="$general_commands"
        />
    </div>
    <button
    wire:click="generate"
        type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Generate</button>
</div>
