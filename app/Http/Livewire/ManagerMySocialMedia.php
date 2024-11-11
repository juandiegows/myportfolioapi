<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManagerMySocialMedia extends Component
{
    public $socialMediaAccounts;
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->loadSocialMediaAccounts();
    }

    public function render()
    {
        return view('livewire.manager-my-social-media');
    }

    public function loadSocialMediaAccounts()
    {
        $user = User::find($this->userId);
        $this->socialMediaAccounts = $user->socialMediaAccounts()
        ->get()
        ->map(function ($account) {
            return [
                'id' => $account->id,
                'name' => $account->social_media->name,
                'url' => $account->social_media->url,
                'link' => $account->link, // Asegúrate de que el campo 'link' existe
            ];
        })->toArray();
    }
}
