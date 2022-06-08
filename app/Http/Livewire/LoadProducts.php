<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;

class LoadProducts extends Component
{

    public $perPage;
    public $page;

    public function mount($page = null, $perPage = null) 
    {
        $this->page = $page ?? 1;
        $this->perPage = $perPage ?? 8;
    }

    public function render()
    {
        $products = Products::paginate($this->perPage, ['*'], null, $this->page);
        return view('livewire.load-products', [
            'products' => $products
        ]);
    }
}
