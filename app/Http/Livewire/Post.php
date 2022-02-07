<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount(ModelsPost $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
