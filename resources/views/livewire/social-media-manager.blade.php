<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Administrar redes') }}
        </h2>
    </x-slot>

    <div class="w-[80%] mx-auto  my-4">
        <div class="flex justify-between my-2">
            <div class="flex gap-4">
                <div class="flex gap-4 items-center">
                    <x-label value="Paginación" />
                    <select class="rounded-md" wire:model="perPage">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

            </div>

            <x-button wire:click="addSocialMedia">
                Agregar Red social
            </x-button>
        </div>

        <div class="my-2 text-white">
            {{ $socialMedias->links('pagination::tailwind') }}
        </div>

        <div class="flex flex-wrap gap-4 dark:text-white justify-center">
            @foreach ($socialMedias as $socialMedia)
            <div class="flex gap-2 items-center bg-[#1d1d1d] p-4 rounded-2xl text-lg " title="{{ $socialMedia->name }}">
                <img class="select-none pointer-events-none w-10 h-10" src="{{ $socialMedia->url }}" alt="{{ $socialMedia->name }}" title="{{ $socialMedia->name }}" srcset="">
                <p>{{ $socialMedia->name }}</p>
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="flex justify-end items-center w-30 h-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link wire:click="" class="cursor-pointer text-lg">
                            <div class="flex items-center text-lg gap-2">
                                <svg class="w-6 h-6 hover:scale-75 text-gray-500 dark:text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ededed">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="#ffffff"></path>
                                    </g>
                                </svg>

                                {{ __('Editar') }}
                            </div>
                        </x-dropdown-link>

                        <x-dropdown-link wire:click="deleteSocialMedia({{ $socialMedia->id }})" class="cursor-pointer text-lg">
                            <div class="flex items-center  gap-2 text-lg">
                                <svg class="w-6 h-6 hover:scale-75 text-gray-500 dark:text-gray-400" fill="#d30303" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 456.686 456.686" xml:space="preserve" stroke="#d30303">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path d="M363.541,120.847H93.16c-8.005,0-15.623,3.367-21.04,9.263c-5.389,5.896-8.052,13.798-7.363,21.761l24.767,278.836 c1.303,14.71,13.619,25.98,28.39,25.98h220.874c14.772,0,27.073-11.271,28.391-25.98L391.93,151.87 c0.705-7.963-1.975-15.864-7.363-21.761C379.165,124.214,371.547,120.847,363.541,120.847z M155.896,382.248 c-0.48,0.029-0.929,0.045-1.378,0.045c-9.308,0-17.18-7.169-17.884-16.597l-9.651-127.207 c-0.749-9.876,6.644-18.496,16.537-19.244c9.921-0.778,18.512,6.643,19.26,16.536l9.638,127.206 C173.181,372.879,165.773,381.499,155.896,382.248z M246.003,372.535c0,9.922-8.038,17.944-17.944,17.944 c-9.922,0-17.959-8.022-17.959-17.944V205.012c0-9.922,8.036-17.944,17.959-17.944c9.906,0,17.944,8.022,17.944,17.944V372.535z M320.052,365.696c-0.705,9.428-8.576,16.597-17.884,16.597c-0.449,0-0.898-0.016-1.378-0.045 c-9.877-0.749-17.285-9.369-16.521-19.261l9.638-127.206c0.749-9.894,9.398-17.346,19.262-16.536 c9.892,0.748,17.284,9.368,16.536,19.244L320.052,365.696z"></path>
                                            </g>
                                            <g>
                                                <path d="M370.589,22.344h-52.887C314.889,9.578,303.544,0,289.912,0h-123.15c-13.619,0-24.964,9.578-27.791,22.344H86.097 c-16.941,0-30.649,13.723-30.649,30.648c0,16.927,13.708,30.649,30.649,30.649h284.493c16.941,0,30.649-13.723,30.649-30.649 C401.239,36.066,387.531,22.344,370.589,22.344z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                {{ __('Eliminar') }}
                            </div>
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
            @endforeach
        </div>



    </div>

    <x-modal wire:model="managerSocialMedia">
        @if($managerSocialMedia)
        <div class="text-white p-4 ">
            <h1 class="my-4 text-[2rem]">Agregar Red social</h1>
            <div>

                <div class="my-4" title="click para Seleccionar un icono">
                    <x-label value="Icono" class="my-2" />
                    <label for="select-svg">
                        @if ($dataSocialMedia['icon'])
                        <img src="{{ $dataSocialMedia['icon']->temporaryUrl() }}" alt="SVG Preview" class="w-20 h-20 object-contain" />
                        @else
                        <img src="{{ asset('img/image-svg.svg') }}" alt="SVG Preview" class="w-20 h-20 object-contain" />
                        @endif
                    </label>

                </div>
                <x-input id="select-svg" class="w-full my-2 hidden" wire:model="dataSocialMedia.icon" type="file" accept="image/svg+xml" placeholder="Ingrese el nombre de la red social" />
                <x-input-error for="dataSocialMedia.icon" />
            </div>
            <div>
                <x-label value="Nombre" />
                <x-input class="w-full my-2" wire:model="dataSocialMedia.name" placeholder="Ingrese el nombre de la red social" />
                <x-input-error for="dataSocialMedia.name" />
            </div>
            <div class="flex justify-end my-2">
                <x-button wire:click="store">
                    Agregar Red social
                </x-button>
            </div>
        </div>
        @endif
    </x-modal>

    <x-dialog-modal wire:model="deleteSocialMedia" model="deleteSocialMedia">
        @slot('title')
        Confirmar Eliminacion de red social {{ $dataSocialMedia['name'] }}
        @endslot
        @slot('content')
        <p>¿Desea eliminar esta red social "{{ $dataSocialMedia['name'] }}" ? Esta acción no se puede revertir </p>
        @endslot
        @slot('footer')
        <div class=" flex gap-2">
            <x-danger-button wire:click="$set('deleteSocialMedia', false)">Cancelar</x-danger-button>
            <x-button wire:click="deleteSocialMedia({{ $dataSocialMedia['id'] ?? 0 }}, true)" >Eliminar</x-button>
        </div>
        @endslot
    </x-dialog-modal>

</div>
