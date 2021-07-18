<?php

namespace App\Http\Livewire\News;

use App\Models\News;
use Livewire\Component;

class Index extends Component
{
    public $search;

    public function render()
    {
        $get_fields = [
            'id', 'name', 'user_id', 'preview_content', 'preview_image', 'status', 'comment', 'slug', 'tags',
            'created_at', 'updated_at', 'deleted_at'
        ];
        $entries = News::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id','desc')
            ->paginate(15, $get_fields);
        return view('livewire.news.index', [
            'entries' => $entries,
        ]);
    }
}
