<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end items-center p-4">
                <x-jet-button wire:click="$set('create','true')">{{ __('Add user') }}</x-jet-button>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                                                {{ __('Rol') }}</th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">{{ __('Edit') }}</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-8 w-8 rounded-full object-cover"
                                                                src="https://ui-avatars.com/api/?name={{ $user->name }}&color=7F9CF5&background=random" />
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $user->name }}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{ $user->email }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @foreach ($user->roles as $role)
                                                        @switch($role->name)
                                                            @case('superadmin')
                                                                <span
                                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                    {{ $role->name }}</span>
                                                            @break

                                                            @case('admin')
                                                                <span
                                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                                    {{ $role->name }}
                                                                </span>
                                                            @break

                                                            @case('editor')
                                                                <span
                                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                                                    {{ $role->name }}
                                                                </span>
                                                            @break

                                                            @case('user')
                                                                <span
                                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                                    {{ $role->name }}
                                                                </span>
                                                            @break
                                                        @endswitch
                                                    @endforeach
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    @if ($user->trashed())
                                                        <div class="text-sm text-gray-500 flex">
                                                            <a wire:click="restoreUser({{ $user->id }})"
                                                                class="cursor-pointer">{{ __('Restore') }}</a>
                                                        </div>
                                                    @else
                                                        <div class="text-sm text-gray-500 flex">
                                                            <a class="cursor-pointer text-indigo-600 block"
                                                                wire:click="edit({{ $user }})">{{ __('Edit') }}</a>
                                                            @hasrole('superadmin')
                                                                <a class="cursor-pointer text-red-600 block mx-2"
                                                                    wire:click="delete({{ $user }})">{{ __('Delete') }}</a>
                                                            @endhasrole
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <x-jet-dialog-modal wire:model="editForm">
                                    <x-slot name="title">
                                        {{ __('Update user') }}
                                    </x-slot>
                                    <x-slot name="content">
                                        <div class="px-4 py-3">
                                            <form>
                                                <div class="grid grid-cols-1 gap-6">
                                                    <div class="col-span-1">
                                                        <x-jet-label for="name" value="{{ __('Name') }}" />
                                                        <x-jet-input id="name" type="text"
                                                            class="mt-1 block w-full" wire:model="name" />
                                                        @error('name')
                                                            <span
                                                                class="error text-red-500 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-span-1">
                                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                                        <x-jet-input id="email" type="email"
                                                            class="mt-1 block w-full" wire:model="email" />
                                                        @error('email')
                                                            <span
                                                                class="error text-red-500 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-span-1">
                                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                                        <div class="flex items-center">
                                                            <x-jet-input id="password"
                                                            type="{{ $show ? 'text' : 'password' ; }}"
                                                            class="mt-1 block w-full" wire:model.defer="password" />
                                                        @if ($show)
                                                            <i class="fas fa-eye-slash ml-2 cursor-pointer"
                                                                wire:click="$set('show', false)"></i>
                                                        @else
                                                            <i class="fas fa-eye ml-2 cursor-pointer"
                                                                wire:click="$set('show', true)"></i>
                                                        @endif
                                                        </div>
                                                        @error('password')
                                                            <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-span-1">
                                                        <x-jet-label for="password_confirmation"
                                                            value="{{ __('Confirm Password') }}" />
                                                            <div class="flex items-center">
                                                                <x-jet-input id="password_confirmation"
                                                                type="{{ $show_confirmation ? 'text' : 'password' ; }}"
                                                                class="mt-1 block w-full" wire:model.defer="password_confirmation" />
                                                            @if ($show_confirmation)
                                                                <i class="fas fa-eye-slash ml-2 cursor-pointer"
                                                                    wire:click="$set('show_confirmation', false)"></i>
                                                            @else
                                                                <i class="fas fa-eye ml-2 cursor-pointer"
                                                                    wire:click="$set('show_confirmation', true)"></i>
                                                            @endif
                                                            </div>
                                                        @error('password_confirmation')
                                                            <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-span-1">
                                                        <x-jet-label for="role" value="{{ __('Role') }}" />
                                                        <select wire:model="role"
                                                            class="w-full rounded-md border-gray-200">
                                                            <option value="" disabled selected>Selecciona una
                                                                opcion
                                                            </option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->id }}">
                                                                    {{ $role->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('role')
                                                            <span
                                                                class="error text-red-500 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </form>
                                    </x-slot>
                                    <x-slot name="footer">
                                        <x-jet-button wire:click="update">{{ __('Update') }}
                                        </x-jet-button>
                                    </x-slot>
                                </x-jet-dialog-modal>
                                <div class="px-3 py-2">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>

                        <x-jet-dialog-modal wire:model="create">
                            <x-slot name="title">
                                {{ __('Add user') }}
                            </x-slot>
                            <x-slot name="content">
                                <div class="px-4 py-3">
                                    <form>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div class="col-span-1">
                                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                                <x-jet-input id="name" type="text" class="mt-1 block w-full"
                                                    wire:model.defer="name" />
                                                @error('name')
                                                    <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-span-1">
                                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                                <x-jet-input id="email" type="email" class="mt-1 block w-full"
                                                    wire:model.defer="email" />
                                                @error('email')
                                                    <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-span-1">
                                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                                <div class="flex items-center">
                                                    <x-jet-input id="password"
                                                    type="{{ $show ? 'text' : 'password' ; }}"
                                                    class="mt-1 block w-full" wire:model.defer="password" />
                                                @if ($show)
                                                    <i class="fas fa-eye-slash ml-2 cursor-pointer"
                                                        wire:click="$set('show', false)"></i>
                                                @else
                                                    <i class="fas fa-eye ml-2 cursor-pointer"
                                                        wire:click="$set('show', true)"></i>
                                                @endif
                                                </div>
                                                @error('password')
                                                    <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-span-1">
                                                <x-jet-label for="password_confirmation"
                                                    value="{{ __('Confirm Password') }}" />
                                                    <div class="flex items-center">
                                                        <x-jet-input id="password_confirmation"
                                                        type="{{ $show_confirmation ? 'text' : 'password' ; }}"
                                                        class="mt-1 block w-full" wire:model.defer="password_confirmation" />
                                                    @if ($show_confirmation)
                                                        <i class="fas fa-eye-slash ml-2 cursor-pointer"
                                                            wire:click="$set('show_confirmation', false)"></i>
                                                    @else
                                                        <i class="fas fa-eye ml-2 cursor-pointer"
                                                            wire:click="$set('show_confirmation', true)"></i>
                                                    @endif
                                                    </div>
                                                @error('password_confirmation')
                                                    <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-span-1">
                                                <x-jet-label for="role" value="{{ __('Role') }}" />
                                                <select wire:model="role" class="w-full rounded-md border-gray-200">
                                                    <option value="" disabled selected>Selecciona una opcion
                                                    </option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('role')
                                                    <span class="error text-red-500 text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </form>
                            </x-slot>
                            <x-slot name="footer">
                                <x-jet-button wire:click="store">{{ __('Add') }}</x-jet-button>
                            </x-slot>

                        </x-jet-dialog-modal>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
