<div>
    <section>
        <div class="flex flex-row justify-between items-center">
            <h2 class="text-2xl font-bold leading-tight text-gray-900">Interfaces</h2>
            <button
                wire:click="reset_if"
                type="button"
                class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Reset Interfaces
            </button>
        </div>
        <div>

            <label for="subnet"
                   class="block text-sm font-medium text-gray-700">
                IPv4 Subnet Generator</label>

            <div class="flex flex-row space-x-4 items-center px-2">

                <input
                    wire:model="subnet"
                    id="subnet" type="range"
                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                    min="0"
                    max="32"
                >
            <label for="subnet_number" class="sr-only">Numerical</label>
                <input
                    wire:model="subnet"
                    type="number" name="subnet_number" id="subnet_number"
                    class="block w-1/6 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="24">
            </div>
            <div class="text-sm font-normal px-2">
                {{ $subnet_mask }}
            </div>
        </div>

        @foreach($interface_bag as $interface)

            <x-interface
                :interface_bag="$interface_bag"
                :index="$loop->index"
            />

        @endforeach
        <div class="mt-8">
            <button
                wire:click="add_if"
                type="button"
                class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Add Interface
            </button>
        </div>
    </section>
</div>
