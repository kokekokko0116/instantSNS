<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post as PostModel;

class Post extends Component
{
    public $text;

    public function create()
    {
        PostModel::create([
            'content' => $this->text,
        ]);
    }
    public function render()
    {
        return view('livewire.post', [
            'posts' => PostModel::all()->sortByDesc('created_at'),
        ]);
    }
}
