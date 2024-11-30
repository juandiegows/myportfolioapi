<?php

namespace App\Http\Livewire;

use App\Models\SocialMedia;
use App\Models\SocialMediaUser;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ManagerMySocialMedia extends Component
{
    public $socialMediaAccounts;
    public $userId;
    public $socials;
    public $selectedSocial;
    public $deleteSocial;
    public $modals = [
        'deleteSocial' => false,
    ];

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->loadSocialMediaAccounts();
        $this->loadSocials();
        $this->selectedSocial = $this->socials->first()->id ?? 0;
    }

    public function render()
    {
        return view('livewire.manager-my-social-media');
    }

    public function addSocialMedia()
    {
        $social = $this->socials->where('id', $this->selectedSocial)->first();
        $this->socialMediaAccounts[] = [
            'id' => 0,
            'social_media_id' => $social->id,
            'name' => $social->name,
            'url' => $social->url,
            'link' => '', // Asegúrate de que el campo 'link' existe
            'is_principal' => false,
        ];
    }

    public function deleteSocialMedia($key, bool $confirmed)
    {

        if ($confirmed) {
            unset($this->socialMediaAccounts[$key]);
            $this->socialMediaAccounts = array_values($this->socialMediaAccounts);
        } else {
            if ($this->socialMediaAccounts[$key]['id'] != 0) {
                $this->deleteSocial = $this->socialMediaAccounts[$key];
            }

            $this->modals['deleteSocial'] = true;
        }

    }

    public function loadSocials()
    {
        $this->socials = SocialMedia::all();
    }

    public function loadSocialMediaAccounts()
    {
        $user = User::find($this->userId);
        $this->socialMediaAccounts = $user->socialMediaAccounts()
            ->get()
            ->map(function ($account) {
                return [
                    'id' => $account->id,
                    'social_media_id' => $account->social_media->id,
                    'name' => $account->social_media->name,
                    'url' => $account->social_media->url,
                    'link' => $account->link, // Asegúrate de que el campo 'link' existe
                    'is_principal' => $account->is_principal,
                ];
            })->toArray();
    }


    public function delete(){
        SocialMediaUser::find($this->deleteSocial['id'])->deleteOrFail();
        $this->modals['deleteSocial'] = false;
        flash()->addSuccess("Se ha eliminado la red social", "Eliminar red");
    }
    public function store()
    {
        $rules = [];
        $messages = [];
        // Primero, verificar si hay URLs duplicadas en el array
        $urls = array_column($this->socialMediaAccounts, 'link');
        $duplicateUrls = array_diff_key($urls, array_unique($urls));

        if (!empty($duplicateUrls)) {
            foreach ($duplicateUrls as $index => $value) {
                $this->addError("socialMediaAccounts.{$index}.link", 'La URL ya está repetida en el formulario.');
            }
            return;
        }

        foreach ($this->socialMediaAccounts as $index => $socialMediaAccount) {
            $rules["socialMediaAccounts.{$index}.link"] = [
                'required',
                'url',
                Rule::unique('social_media_users', 'link')->ignore($socialMediaAccount['id'] ?? null), // Excluir el ID si es un registro existente
            ];

            $messages["socialMediaAccounts.{$index}.link.required"] = 'La URL es obligatoria.';
            $messages["socialMediaAccounts.{$index}.link.url"] = 'La URL debe ser válida.';
            $messages["socialMediaAccounts.{$index}.link.unique"] = 'La URL debe ser única.';
        }

        // Ahora valida todos los campos de una sola vez
        $this->validate($rules, $messages);

        foreach ($this->socialMediaAccounts as $account) {
            // Si el 'id' es 0, creamos un nuevo registro
            if ($account['id'] == 0) {
                // Crear una nueva cuenta en la tabla social_media_users
                SocialMediaUser::create([
                    'user_id' => auth()->id(), // Usamos el ID del usuario actual
                    'social_media_id' => $account['social_media_id'], // Asignamos el 'social_media_id' correcto
                    'link' => $account['link'], // El 'link' de la cuenta social
                    'is_principal' => $account['is_principal'], // Determinamos si es la cuenta principal
                ]);
            } else {
                // Si el 'id' no es 0, buscamos el registro existente y lo actualizamos
                $existingAccount = SocialMediaUser::find($account['id']);

                if ($existingAccount) {
                    // Solo actualizamos los campos 'link' e 'is_principal'
                    $existingAccount->update([
                        'link' => $account['link'],
                        'is_principal' => $account['is_principal'],
                    ]);
                }
            }
        }
        $this->loadSocialMediaAccounts();
        flash()->addSuccess("Se ha actualizado las redes sociales", "Actualizar Redes");
    }
}
