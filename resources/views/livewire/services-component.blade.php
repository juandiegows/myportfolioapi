<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Administrar Servicios') }}
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
                Agregar Servicio
            </x-button>
        </div>
    </div>
    <div class="w-[80%] mx-auto">
        <x-table :headers="['Nombre', 'Descripcion', 'Activo', 'Acciones']">
            @foreach ($services as $serviceItem)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $serviceItem->spanish_title }}
                </th>
                <td class="px-6 py-4">
                    {{ $serviceItem->spanish_description }}
                </td>
                <td class="px-6 py-4">
                    {{ $serviceItem->active ? "Si":" No" }}
                </td>
                <td class="flex  px-6 py-4 text-center justify-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12Z" fill="#ffffff"></path> <path d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" fill="#ffffff"></path> <path d="M21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12Z" fill="#ffffff"></path> </g></svg>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link wire:click="toogleActive({{ $serviceItem->id }})">
                                {{ $serviceItem->active ? " Desactivar" : "Activar"}}
                            </x-dropdown-link>

                        </x-slot>
                    </x-dropdown>
                </td>
            </tr>
            @endforeach


        </x-table>
    </div>



</div>
