<div>
    <div>
 
        <div class="flex justify-between">
            <select class="rounded-md" wire:model="selectedSocial">
                @foreach ($socials as $socialItem)
                <option value="{{ $socialItem->id }}">
                    <img class="w-4" src="{{ $socialItem->url }}" alt="{{ $socialItem->name }}">
                    {{ $socialItem->name }}
                </option>
                @endforeach
            </select>
            <x-button wire:click="addSocialMedia" wire:loading.attr="disabled" class="my-2 bg-green-700">
                {{ __('Agregar Red') }}
            </x-button>
        </div>
        @foreach ($socialMediaAccounts as $key => $socialMediaAccount)
        <div class="grid  gap-2 bg-[#111827] text-white p-2 my-2 rounded-lg items-center">
            <div class="flex gap-2 items-center justify-between">
                <p>{{ $socialMediaAccount['name'] }}</p>
                <div>
                    <input   @checked($socialMediaAccount['is_principal'])  wire:click="$set('socialMediaAccounts.{{ $key }}.is_principal',{{ !$socialMediaAccount['is_principal'] }})" id="ck_{{$key }}" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ck_{{$key }}">Principal</label>
                </div>
            </div>

            <div class="flex gap-2 items-start">

                <x-input-with-icon placeholder="Ingrese la url" class="flex-1 pl-10" icon="{{  $socialMediaAccount['url'] }}" type="url" wire:model="socialMediaAccounts.{{ $key }}.link" />

                <svg class="w-6 mt-2 h-6 hover:scale-75 text-gray-500 dark:text-gray-400 cursor-pointer" wire:click="deleteSocialMedia({{ $key }}, {{ $socialMediaAccount['id'] === 0 ? 'true' : 'false' }})" fill="#d30303" height="200px" width="200px" version="1.1" id="{{ $key }}" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 456.686 456.686" xml:space="preserve" stroke="#d30303">
                    <g id="SVGRepo_bgCarrier{{ $key }}" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier{{ $key }}" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier{{ $key }}">
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

            </div>

        </div>
        @endforeach
        <div class="flex justify-end">
            <x-button wire:loading.attr="disabled" wire:click="store" class="my-2">
                {{ __('Save') }}
            </x-button>
        </div>
    </div>

    <x-confirmation-modal wire:model="modals.deleteSocial">
        <x-slot name="title">
           <h2 class="text-white text-lg">Eliminar red social {{ $deleteSocial['name'] ?? ''}}</h2>
        </x-slot>

        <x-slot name="content">
           <p class="text-white text-md">¿Estás seguro que deseas eliminar la red social {{ $deleteSocial['name'] ?? '' }}? </p>
           <p class="text-white text-md"><span>Link: </span> {{ $deleteSocial['link']?? ''}}</p>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modals.deleteSocial')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

</div>