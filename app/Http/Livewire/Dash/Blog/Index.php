<?php

namespace App\Http\Livewire\Dash\Blog;

use App\Models\Blog;
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
        $entries = Blog::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id','desc')
            ->paginate(15, $get_fields);
        return view('livewire.dash.blog.index', [
            'entries' => $entries,
        ]);
    }
}
