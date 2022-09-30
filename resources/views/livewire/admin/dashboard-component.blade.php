<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height: 30rem;">
                <livewire:livewire-pie-chart :pie-chart-model="$pieChartModel" />
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-4">
                <div class="flex items-center p-4 justify-between">
                    <div class="flex items-center">
                        <x-jet-label class="mx-3" value="De" />
                        <x-jet-input class="mx-3" type="date" wire:model="start_date" />
                        <x-jet-label class="mx-3" value="a" />
                        <x-jet-input class="mx-3" type="date" max="{{ now()->format('Y-m-d') }}"
                            wire:model="end_date" />
                        <x-jet-button class="mx-3" wire:click="allTime">
                            Todo el tiempo
                        </x-jet-button>
                        <x-jet-button wire:click="today">
                            Hoy
                        </x-jet-button>
                    </div>
                    <div class="flex items-center">
                        <x-jet-button wire:click="export">
                            Exportar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </x-jet-button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Client') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Order') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Partidas') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Monto') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($references as $reference)
                                        @if ($reference->order->user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $reference->order->user->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $reference->order->contract }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $reference->description }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    ${{ number_format($reference->amount, 2) }}
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            TOTAL
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            ${{ number_format($total, 2) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{--                             <div class="px-3 py-2">
                                {{ $orders->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
