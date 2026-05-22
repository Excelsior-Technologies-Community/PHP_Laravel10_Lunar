<?php

namespace App\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class ProductSearch extends Component
{
    public $search = '';

    public function render()
    {
        $products = [];

        if (strlen($this->search) >= 2) {
            $products = Product::whereHas('translate', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })->limit(5)->get();
        }

        return view('livewire.product-search', [
            'products' => $products,
        ]);
    }
}