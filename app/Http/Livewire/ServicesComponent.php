<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesComponent extends Component
{
    use WithPagination;
    public $perPage = 10;
    public function render()
    {

        // Genera una clave única para la caché
        $cacheKey = 'social_medias_page_' . $this->page . '_per_' . $this->perPage;

        // Intenta obtener los datos de la caché
        $services = Cache::remember($cacheKey, 60, function () {
            return Service::paginate($this->perPage);
        });
        return view('livewire.services-component', compact('services'));
    }

    public function toogleActive(Service $service)
    {
        $service->active = !$service->active;
        $service->save();
        flash()->addSuccess(
            "Se ha <span class=' font-bold " . ($service->active ? "text-green-500" : "text-red-500") . "'>" .
            ($service->active ? "Activado" : "Desactivado") . "</span> el servicio de " . $service->spanish_title,
            "Activar/desactivar servicio"
        ); // Genera la clave de caché
        $cacheKey = 'social_medias_page_' . $this->page . '_per_' . $this->perPage;

// Elimina la caché usando la clave generada
        Cache::forget($cacheKey);
    }
}
