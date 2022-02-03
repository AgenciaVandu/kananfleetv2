<div x-data="{open:open}" class="mt-2">
    <div class="bg-gray-200 py-1 px-2 cursor-pointer" x-on:click="open=!open">
        <h2 class="text-xl text-gray-800 font-semibold">Seccion Aliados</h2>
    </div>

    <form wire:submit.prevent="store" class="p-4" x-show="open">
        @if ($file)
            <div class="flex justify-center mt-4 mb-4">
                <img class="w-32 text-center" src="{{ $file->temporaryUrl() }}">
            </div>
        @endif

        <div class="mb-2">
            <x-jet-label value="Name:" />
            <x-jet-input type="text" class="w-full" wire:model="name" />
        </div>
        <div
            class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center cursor-pointer">
            <div class="absolute">
                <div class="flex flex-col items-center cursor-pointer">
                    <i class="fa fa-cloud-upload fa-3x text-gray-200 cursor-pointer"></i>
                    <span class="block text-gray-400 font-normal cursor-pointer">Arrastra la imagen del aliado
                        aqui</span>
                    <span class="block text-gray-400 font-normal cursor-pointer">o</span>
                    <span class="block text-blue-400 font-normal cursor-pointer">Examina archivos</span>
                </div>
            </div>
            <input type="file" class="h-full w-full opacity-0" wire:model="file">
        </div>
        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <div class="flex items-center mt-4 mb-4 space-x-4">
            @if ($aliados->images)
                @foreach ($aliados->images as $image)
                    <div class="shadow-lg">
                        <div class="text-center text-sm font-semibold">
                            {{ $image->name }}
                        </div>
                        <img class="w-32 text-center" src="{{ Storage::url($image->url) }}"><br>
                        <div class="flex justify-between items-center py-2 mx-2">
                            <i class="far fa-image ml-2"></i>
                            <i wire:click="edit({{ $image }})" class="fas fa-pencil-alt cursor-pointer text-gray-800 hover:text-blue-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"></i>
                            <i wire:click="delete({{ $image }})"
                                class="fas fa-trash cursor-pointer text-gray-800 hover:text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                alt="Eliminar"></i>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="flex justify-end mt-4">
            <x-jet-action-message class="mr-3" on="saved">
                Agregado
            </x-jet-action-message>
            <x-jet-button type="submit" wire:loading.attr="disabled">Agregar
            </x-jet-button>
        </div>
    </form>

     <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">Editar Categoria</x-slot>
        <x-slot name="content">
            <div class="space-y-3">
                <div class="flex mx-2">
                    <div class="w-full">
                        @if ($editImage)
                            <img src="{{ $editImage->temporaryUrl() }}"
                                class="w-32 object-cover object-center">
                        @else
                            <img src="{{ Storage::url($editForm['url']) }}"
                                class="w-32 object-cover object-center">
                        @endif
                    </div>

                </div>
                <div>
                    <x-jet-label value="Nombre" />
                    <x-jet-input wire:model="editForm.name" type="text" placeholder="Nombre de categoria"
                        class="w-full" />
                    <x-jet-input-error for="editForm.name" />
                </div>
                <div>
                    <x-jet-label value="Imagen" />
                    <x-jet-input wire:model="editImage" type="file" accept="image/*" class="mt-1 w-full"
                        id="{{ $rand }}" />
                    <x-jet-input-error for="editImage" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:loading.attr="disabled" wire:target="editImage,update" wire:click="update">Actualizar
            </x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
