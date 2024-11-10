<?php

namespace App\Http\Livewire;

use App\Models\SocialMedia;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Illuminate\Support\Str; 

class SocialMediaManager extends Component
{

    use WithPagination, WithFileUploads;
    public $perPage = 10;
    public $managerSocialMedia = false;
  
    public $dataSocialMedia = [
        'icon' => null,
        'name' => ''
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


    public function addSocialMedia(){
        $this->reset(['dataSocialMedia']);
        $this->managerSocialMedia = true;
    }

    public function store(){
        $id = $this->dataSocialMedia['id'] ?? 0; // Asigna 0 si 'id' no está definido en dataSocialMedia

        $this->validate([
            'dataSocialMedia.icon' => 'required|image|max:70', // máximo 70 KB
            'dataSocialMedia.name' => 'required|string|max:255|unique:social_media,name,' . $id
        ], [
            'dataSocialMedia.icon.required' => 'El icono es obligatorio.',
            'dataSocialMedia.icon.image' => 'El archivo debe ser una imagen.',
            'dataSocialMedia.icon.max' => 'El icono no debe exceder los 70 KB.',
            'dataSocialMedia.name.required' => 'El nombre es obligatorio.',
            'dataSocialMedia.name.unique' => 'Este nombre ya está en uso.',
            'dataSocialMedia.name.max' => 'El nombre no debe exceder los 255 caracteres.'
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
                'link_image' => $this->dataSocialMedia['icon']
            ]);
            Cache::forget('social_medias_page_' . $this->page . '_per_' . $this->perPage);
            flash()->addSuccess('Se agrego correctamente la red social '.$this->dataSocialMedia['name'], 'Red Social');
        } catch (\Throwable $th) {
            flash()->addError($th->getMessage()." ".$this->dataSocialMedia['name'], 'Red Social');
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
