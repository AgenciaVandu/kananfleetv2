<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Config currencies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4 grid grid-cols-2 gap-4">
                    <div>
                        <x-jet-label value="USD" />
                        <x-jet-input type="text" wire:model="usd" class="w-full bg-gray-100" disabled/>
                    </div>
                    <div>
                        <x-jet-label value="MXN" />
                        <x-jet-input type="text" wire:model="mxn" {{-- class="w-full bg-gray-100" disabled --}}/>
                    </div>
                </div>
                {{-- <p class="p-4 text-gray-400 text-sm">Tipo de cambio pesos por dolar E.U.A interbancario a 48 hrs apertura <a href="https://www.banxico.org.mx/SieAPIRest/service/v1/doc/catalogoSeries#" class="hover:text-gray-900"><b> fuente Banco de México </b></a></p> --}}
                <div class="flex justify-end p-4 items-center">
                    <x-jet-action-message class="mr-3 text-green-500" on="updated">
                        Moneda actualizada
                    </x-jet-action-message>
                    <x-jet-button wire:click="update" {{-- disabled --}}>
                        Actualizar
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>
