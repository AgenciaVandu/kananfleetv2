<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($show)
                    <div class="p-4">
                        <x-jet-secondary-button wire:click="index">{{ __('Back') }}</x-jet-secondary-button>
                    </div>
                @endif
                @if ($table)
                    <div class="flex justify-end p-4">
                        <x-jet-button wire:click="$set('addClient','true')">{{ __('Add client') }}</x-jet-button>
                    </div>
                @endif
                @if ($table)
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Name') }}</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Information') }}</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Status') }}</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Created') }}</th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">{{ __('Open') }}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($clients as $client)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-8 w-8 rounded-full object-cover"
                                                                    src="https://ui-avatars.com/api/?name={{ $client->name }}&color=7F9CF5&background=random" />
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $client->name }}
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    {{ $client->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $client->company_name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $client->bussiness_name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $client->RFC }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            Active </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        Cliente</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a wire:click="show({{ $client }})"
                                                            class="text-indigo-600 hover:text-indigo-900 cursor-pointer">{{ __('Open') }}</a>
                                                        <span
                                                            class="ml-2 text-red-600 hover:text-red-900 cursor-pointer"
                                                            wire:click="delete({{ $client }})">{{ __('Delete') }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="px-3 py-2">
                                        {{ $clients->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <x-jet-dialog-modal wire:model="addClient">
                    <x-slot name="title">{{ __('Add client') }}</x-slot>
                    <x-slot name="content">
                        <div class="space-y-4">
                            <div>
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="name" />
                                <x-jet-input-error for="name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Bussiness name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text"
                                    wire:model="bussiness_name" />
                                <x-jet-input-error for="bussiness_name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model="email" />
                                <x-jet-input-error for="email" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <div class="flex items-center ">
                                    <x-jet-input id="password" class="block mt-1 w-full" type="{{ $showPass ? 'text' : 'password' ; }}"
                                        wire:model="password" />
                                    @if ($showPass)
                                        <i class="fas fa-eye-slash ml-2 cursor-pointer" wire:click="$set('showPass', false)"></i>
                                    @else
                                        <i class="fas fa-eye ml-2 cursor-pointer" wire:click="$set('showPass', true)"></i>
                                    @endif
                                </div>
                                <x-jet-input-error for="password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Company name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text"
                                    wire:model="company_name" />
                                <x-jet-input-error for="company_name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('RFC') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="RFC" />
                                <x-jet-input-error for="RFC" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Legal representative name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text"
                                    wire:model="legal_representative_name" />
                                <x-jet-input-error for="legal_representative_name" />
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-button wire:click="store">{{ __('Add') }}
                        </x-jet-button>
                    </x-slot>

                </x-jet-dialog-modal>

                @if ($show)
                    <div class="p-6 bg-gray-100">
                        <x-jet-form-section submit="update">
                            <x-slot name="title">
                                Información del cliente
                            </x-slot>

                            <x-slot name="description">
                                Podras modificar la informacion de los campos que se encuentren habilitados.
                            </x-slot>

                            <x-slot name="form">
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Empresa" />
                                    <x-jet-input type="text" wire:model="editForm.company_name" class="w-full"
                                        placeholder="Nombre del cliente" />
                                    <x-jet-input-error for="editForm.company_name" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="{{ __('Bussiness name') }}" />
                                    <x-jet-input type="text" wire:model="editForm.bussiness_name" class="w-full"
                                        placeholder="Razón Social" />
                                    <x-jet-input-error for="editForm.bussiness_name" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="{{ __('RFC') }}" />
                                    <x-jet-input type="text" wire:model="editForm.RFC" class="w-full"
                                        placeholder="RFC" />
                                    <x-jet-input-error for="editForm.RFC" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Email" />
                                    <x-jet-input type="text" wire:model="editForm.email"
                                        class="w-full bg-gray-100" placeholder="Email" />
                                    <x-jet-input-error for="editForm.email" />
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <x-jet-label value="Representante legal" />
                                    <x-jet-input type="text" wire:model="editForm.legal_representative_name"
                                        class="w-full" placeholder="Representante legal" />
                                    <x-jet-input-error for="editForm.legal_representative_name" />
                                </div>
                            </x-slot>

                            <x-slot name="actions" class="flex items-center">
                                <x-jet-action-message class="mr-3 text-green-500" on="updated">
                                    Cliente actualizado
                                </x-jet-action-message>
                                <x-jet-button>{{ __('Update') }}</x-jet-button>
                            </x-slot>
                        </x-jet-form-section>
                    </div>
                    <div class="p-6">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Purchase Orders') }}
                        </h2>
                        <div class="p-6">
                            <div class="flex justify-end">
                                <x-jet-danger-button wire:click="$set('addOrder','true')">{{ __('Add order') }}
                                </x-jet-danger-button>
                            </div>
                            <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow-lg">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-200 table-auto">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                {{ __('Description') }}</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                {{ __('Splits') }}</th>
                                                            <th scope="col" class="relative px-6 py-3">
                                                                <span class="sr-only">Edit</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200">
                                                        @foreach ($orders as $order)
                                                            <tr>
                                                                <td class="px-6 py-4 whitespace-normal text-center">
                                                                    <div class="text-sm text-gray-900">
                                                                        {{ $order->contract }}
                                                                        <a wire:click="editOrder({{ $order }})"
                                                                            class="text-indigo-600 hover:text-indigo-900 cursor-pointer mx-1">
                                                                            <i class="fas fa-pen"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                                                    <div x-data="{open:false}"
                                                                        class="text-sm text-gray-900">
                                                                        {{ $order->references->count() }}
                                                                        <i class="fas fa-eye cursor-pointer hover:text-gray-400"
                                                                            x-on:click="open=!open"></i>
                                                                        <div x-show="open">
                                                                            <div
                                                                                class="grid grid-cols-6 text-xs items-center">
                                                                                @foreach ($order->references as $reference)
                                                                                    <div class="text-right mr-2">
                                                                                        {{ $loop->iteration }}
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-span-3 text-center border-2">
                                                                                        <p class="truncate">
                                                                                            {{ $reference->description }}
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="text-center border-2">
                                                                                        USD
                                                                                        {{ number_format($reference->amount, 2) }}
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex justify-around border-2">
                                                                                        @switch($reference->status)
                                                                                            @case(1)
                                                                                                <i
                                                                                                    class="far fa-clock text-orange-300"></i>
                                                                                                <a wire:click="editReference({{ $reference }})"
                                                                                                    class="text-indigo-600 hover:text-indigo-900 cursor-pointer mx-1">
                                                                                                    <i
                                                                                                        class="fas fa-pen"></i>
                                                                                                </a>
                                                                                                <i class="fas fa-trash cursor-pointer hover:text-red-600"
                                                                                                    wire:click="deleteReference({{ $reference }})"></i>
                                                                                            @break

                                                                                            @case(2)
                                                                                                <i
                                                                                                    class="far fa-check-circle text-green-500"></i>
                                                                                            @break

                                                                                            @default
                                                                                        @endswitch

                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-right text-xs font-medium">
                                                                    <a wire:click="formAddReferences({{ $order }})"
                                                                        class="bg-green-600 hover:bg-green-900 text-white px-2 py-1 rounded-md cursor-pointer mx-1">
                                                                        {{ __('Add Split') }}
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <x-jet-dialog-modal wire:model="addOrder">
                                <x-slot name="title">{{ __('Add order') }}</x-slot>
                                <x-slot name="content">
                                    <div class="space-y-4">
                                        <div>
                                            <x-jet-label for="contractDescription" value="{{ __('Contract') }}" />
                                            <x-jet-input wire:keydown.enter="storeOrder" id="contractDescription"
                                                class="block mt-1 w-full" type="text"
                                                wire:model="contractDescription" />
                                            <x-jet-input-error for="contractDescription" />
                                        </div>
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-button wire:click="storeOrder">{{ __('Add') }}
                                    </x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>

                            <x-jet-dialog-modal wire:model="editOrder.open">
                                <x-slot name="title">{{ __('Update order') }}</x-slot>
                                <x-slot name="content">
                                    <div class="space-y-4">
                                        <div>
                                            <x-jet-label for="contractDescription" value="{{ __('Contract') }}" />
                                            <x-jet-input wire:keydown.enter="updateOrder"
                                                id="editOrder.contractDescription" class="block mt-1 w-full"
                                                type="text" wire:model="editOrder.contractDescription" />
                                            <x-jet-input-error for="editOrder.contractDescription" />
                                        </div>
                                    </div>
                                </x-slot>
                                <x-slot name="footer">
                                    <x-jet-button wire:click="updateOrder">{{ __('Update') }}
                                    </x-jet-button>
                                </x-slot>
                            </x-jet-dialog-modal>
                        </div>
                    </div>
                    {{-- Modal para crear referencias --}}
                    <x-jet-dialog-modal wire:model="addReference" class="w-full">
                        <x-slot name="title">{{ __('Add Split') }}</x-slot>
                        <x-slot name="content">
                            <div class="space-y-4">
                                <div>
                                    <x-jet-label for="description" value="{{ __('Description') }}" />
                                    <x-jet-input id="description" class="block mt-1 w-full" type="text"
                                        wire:model="description" />
                                    <x-jet-input-error for="reference" />
                                </div>
                                <div>
                                    <x-jet-label for="amount" value="{{ __('Amount') }}" />
                                    <x-jet-input id="amount" class="block mt-1 w-full" type="number"
                                        wire:model="amount" />
                                    <x-jet-input-error for="amount" />
                                </div>
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-jet-button wire:click="storeReference">{{ __('Add') }}
                            </x-jet-button>
                        </x-slot>
                    </x-jet-dialog-modal>

                    {{-- Modal para actualizar referencias --}}
                    <x-jet-dialog-modal wire:model="editReference.open">
                        <x-slot name="title">{{ __('Edit Split') }}</x-slot>
                        <x-slot name="content">
                            <div class="space-y-4">
                                <div class="mt-4">
                                    <x-jet-label for="description" value="{{ __('Description') }}" />
                                    <x-jet-input id="description" class="block mt-1 w-full" type="text"
                                        wire:model="editReference.description" />
                                    <x-jet-input-error for="editReference.description" />
                                </div>
                                <div>
                                    <x-jet-label for="amount" value="{{ __('Amount') }}" />
                                    <x-jet-input id="amount" class="block mt-1 w-full" type="number"
                                        wire:model="editReference.amount" />
                                    <x-jet-input-error for="editReference.amount" />
                                </div>
                                {{-- <div class="mt-4">
                                    @if ($editReference['contract'])
                                        <div class="flex items-center space-y-2 mb-4">
                                            <div>
                                                <i class="far fa-file-pdf text-3xl text-red-700"></i>
                                            </div>
                                            <div>
                                                <a href="{{ Storage::url($editReference['contract']) }}"
                                                    class="block text-lg ml-2 text-blue-600"
                                                    target="_blank">Contrato</a>
                                            </div>
                                        </div>
                                    @endif
                                    <x-jet-label for="contract"
                                        value="{{ __('Contract') }} ({{ __('Optional') }})" />
                                    <x-jet-input id="contract" class="block mt-1 w-full" type="file"
                                        wire:model="editContract" id="{{ $rand }}" />
                                    <x-jet-input-error for="editReferencecontract" />
                                </div> --}}
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-jet-button wire:click="updateReference">{{ __('Update') }}
                            </x-jet-button>
                        </x-slot>
                    </x-jet-dialog-modal>
                @endif
            </div>
        </div>
    </div>
</div>
