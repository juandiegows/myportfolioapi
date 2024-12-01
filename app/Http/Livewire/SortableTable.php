<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SortableTable extends Component
{
    public $headers = [];
    public $rows = [];
    public $sortColumn = null;
    public $sortDirection = 'asc';

    public function mount()
    {
        $this->headers = [
            'name' => 'Product Name',
            'color' => 'Color',
            'category' => 'Category',
            'price' => 'Price'
        ];
        $this->rows = [
            ['name' => 'Apple MacBook Pro 17"', 'color' => 'Silver', 'category' => 'Laptop', 'price' => '$2999'],
            ['name' => 'Microsoft Surface Pro', 'color' => 'White', 'category' => 'Laptop PC', 'price' => '$1999'],
            ['name' => 'Magic Mouse 2', 'color' => 'Black', 'category' => 'Accessories', 'price' => '$99']
        ];
    }

    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            // Alterna la dirección
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            // Cambia la columna y restablece la dirección a ascendente
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
    
        // Ordena las filas
        $this->rows = $this->sortDirection === 'asc'
            ? collect($this->rows)->sortBy($column)->toArray()
            : collect($this->rows)->sortByDesc($column)->toArray();
    }

    public function render()
    {
        return view('livewire.sortable-table');
    }
}
