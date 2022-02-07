<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts = [];

    public function render()
    {
        $this->posts = Post::orderBy('created_at', 'desc')->get();
        return view('livewire.posts');
    }
}
