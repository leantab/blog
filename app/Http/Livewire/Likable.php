<?php

namespace App\Http\Livewire;

use App\Models\Like;
use Livewire\Component;

class Likable extends Component
{
    public $model;
    public $modelType;
    public $id;
    public $likedBg;
    public $likesCount;
    public $isLiked;

    public function mount($modelType, $id)
    {
        $this->model = $modelType;
        $this->id = $id;
        $this->model = $this->getModel();

        $this->isLiked = Like::where([
            'user_id' => auth()->id(),
            'likable_model' => $modelType,
            'likable_id' => $id
        ])->exists();
    }

    public function getModel()
    {
        try {
            return $this->modelType::find($this->id);
        } catch (\Error $e) {
            abort(500);
            dd('Class ' . $this->modelType . ' not Found');
        }
    }

    public function render()
    {
        return view('livewire.likable');
    }

    public function Like()
    {
        //
    }

    public function unlike()
    {
        //
    }
}
