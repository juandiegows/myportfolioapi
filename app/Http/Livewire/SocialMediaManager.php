<?php

namespace App\Http\Livewire;

use App\Models\SocialMedia;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SocialMediaManager extends Component
{

    use WithPagination, WithFileUploads;
    public $perPage = 10;
    public $managerSocialMedia = false;
    public $deleteSocialMedia = false;

    public $dataSocialMedia = [
        'icon' => null,
        'name' => '',
    ];

    public function render()
    {
        // Genera una clave única para la caché
        $cacheKey = 'social_medias_page_' . $this->page . '_per_' . $this->perPage;

        // Intenta obtener los datos de la caché
        $socialMedias = Cache::remember($cacheKey, 60, function () {
            return SocialMedia::paginate($this->perPage);
        });

        return view('livewire.social-media-manager', compact('socialMedias'));
    }

    public function updated($name)
    {
        // Limpiar solo el mensaje de error del campo actualizado
        $this->resetErrorBag($name);

    }

    public function addSocialMedia()
    {
        $this->reset(['dataSocialMedia']);
        $this->managerSocialMedia = true;
    }

    public function editSocialMedia(SocialMedia $social)
    {
        $this->dataSocialMedia = $social->toArray();
        $this->managerSocialMedia = true;
    }

    public function deleteSocialMedia(SocialMedia $social, $confirmed = false)
    {
        if($social->socialMediaUser()->count() > 0){
            flash()->addInfo('No se puede eliminar la red social ' . $this->dataSocialMedia['name']. " porque esta siendo usanda", 'Red Social');
            return;
        }
        if ($confirmed) {
            if ($social->link_image && Storage::exists('public/' . $social->link_image)) {
                Storage::delete('public/' . $social->link_image);
            }
    
            $social->delete();
            Cache::forget('social_medias_page_' . $this->page . '_per_' . $this->perPage);
            flash()->addSuccess('Se eliminado correctamente la red social ' . $this->dataSocialMedia['name'], 'Red Social');
            $this->reset(['dataSocialMedia','deleteSocialMedia']);
        } else {
            $this->dataSocialMedia = $social->toArray();
            $this->deleteSocialMedia = true;
        }

    }

    public function store()
    {
        $id = $this->dataSocialMedia['id'] ?? 0; // Asigna 0 si 'id' no está definido en dataSocialMedia

        $this->validate([
            'dataSocialMedia.icon' => 'required|mimes:svg|max:70', // máximo 70 KB y solo SVG
            'dataSocialMedia.name' => 'required|string|max:255|unique:social_media,name,' . $id,
        ], [
            'dataSocialMedia.icon.required' => 'El icono es obligatorio.',
            'dataSocialMedia.icon.mimes' => 'El icono debe ser un archivo SVG.',
            'dataSocialMedia.icon.max' => 'El icono no debe exceder los 70 KB.',
            'dataSocialMedia.name.required' => 'El nombre es obligatorio.',
            'dataSocialMedia.name.unique' => 'Este nombre ya está en uso.',
            'dataSocialMedia.name.max' => 'El nombre no debe exceder los 255 caracteres.',
        ]);

        try {
            if ($this->dataSocialMedia['icon']) {
                // Reemplazar caracteres especiales en el nombre y añadir extensión y timestamp para mayor seguridad
                $filename = Str::slug($this->dataSocialMedia['name']) . '.' . $this->dataSocialMedia['icon']->getClientOriginalExtension();
                $this->dataSocialMedia['icon']->storeAs('public/img/SocialMedia', $filename);

                // Actualizar la ruta del icono en dataSocialMedia
                $this->dataSocialMedia['icon'] = 'img/SocialMedia/' . $filename;
            }

            SocialMedia::create([
                'name' => $this->dataSocialMedia['name'],
                'link_image' => $this->dataSocialMedia['icon'],
            ]);
            Cache::forget('social_medias_page_' . $this->page . '_per_' . $this->perPage);
            flash()->addSuccess('Se agrego correctamente la red social ' . $this->dataSocialMedia['name'], 'Red Social');
        } catch (\Throwable $th) {
            flash()->addError($th->getMessage() . " " . $this->dataSocialMedia['name'], 'Red Social');
        }
        $this->managerSocialMedia = false;
        $this->reset(['dataSocialMedia']);

    }
    public function update()
    {
        $id = $this->dataSocialMedia['id'] ?? null;
    
        // Asegurarse de que el ID esté presente para actualizar
        if (!$id) {
            flash()->addError('ID de red social no proporcionado.', 'Red Social');
            return;
        }
    
        $this->validate([
            'dataSocialMedia.icon' => 'nullable|mimes:svg|max:70', // El icono puede ser opcional durante la actualización
            'dataSocialMedia.name' => 'required|string|max:255|unique:social_media,name,' . $id,
        ], [
            'dataSocialMedia.icon.mimes' => 'El icono debe ser un archivo SVG.',
            'dataSocialMedia.icon.max' => 'El icono no debe exceder los 70 KB.',
            'dataSocialMedia.name.required' => 'El nombre es obligatorio.',
            'dataSocialMedia.name.unique' => 'Este nombre ya está en uso.',
            'dataSocialMedia.name.max' => 'El nombre no debe exceder los 255 caracteres.',
        ]);
    
        try {
            $social = SocialMedia::findOrFail($id);
    
            if (isset($this->dataSocialMedia['icon']) && $this->dataSocialMedia['icon']) {
                // Elimina el icono anterior si existe
                if ($social->link_image && Storage::exists('public/' . $social->link_image)) {
                    Storage::delete('public/' . $social->link_image);
                }
    
                // Guardar el nuevo icono
                $filename = Str::slug($this->dataSocialMedia['name']) . '.' . $this->dataSocialMedia['icon']->getClientOriginalExtension();
                $this->dataSocialMedia['icon']->storeAs('public/img/SocialMedia', $filename);
    
                // Actualizar la ruta del icono
                $this->dataSocialMedia['icon'] = 'img/SocialMedia/' . $filename;
            } else {
                // Mantener el icono existente si no se actualiza
                $this->dataSocialMedia['icon'] = $social->link_image;
            }
    
            // Actualizar la red social en la base de datos
            $social->update([
                'name' => $this->dataSocialMedia['name'],
                'link_image' => $this->dataSocialMedia['icon'],
            ]);
    
            Cache::forget('social_medias_page_' . $this->page . '_per_' . $this->perPage);
            flash()->addSuccess('Se actualizó correctamente la red social ' . $this->dataSocialMedia['name'], 'Red Social');
        } catch (\Throwable $th) {
            flash()->addError($th->getMessage() . " " . $this->dataSocialMedia['name'], 'Red Social');
        }
    
        $this->managerSocialMedia = false;
        $this->reset(['dataSocialMedia']);
    }
    public function updatingPerPage()
    {
        // Limpiar la caché cuando se cambia el número de elementos por página
        Cache::forget('social_medias_page_' . $this->page . '_per_' . $this->perPage);
    }
}
