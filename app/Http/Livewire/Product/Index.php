<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $search;

    public function render()
    {
        $get_fields = [
            'id', 'name', 'user_id', 'preview_content', 'preview_image', 'status', 'slug', 'tags', 'price', 'discount',
            'vat', 'created_at', 'updated_at', 'deleted_at'
        ];
        $entries = Product::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id','desc')
            ->paginate(15, $get_fields);
        return view('livewire.product.index', [
            'entries' => $entries,
        ]);
    }
}
