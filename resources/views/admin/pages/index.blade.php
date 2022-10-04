<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paginas administrables') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin.header', key('admin.header'))
                @livewire('admin.aliados', key('admin.aliados'))
                @livewire('admin.clientes', key('admin.clientes'))
            </div>
        </div>
    </div>
    <script>
        Swal.fire('Any fool can use a computer')
    </script>
</x-app-layout>
