<div>
    <section>
        <h2 class="text-2xl font-bold leading-tight text-gray-900">Interfaces</h2>

{{--{{ collect($interface_bag) }}--}}

        @foreach($interface_bag as $interface)

            <x-interface
                :interface_bag="$interface_bag"
                :index="$loop->index"
            />

        @endforeach
        <div class="mt-8">
        <button
            wire:click="add_if"
            type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add Interface</button>
        </div>
    </section>
</div>
