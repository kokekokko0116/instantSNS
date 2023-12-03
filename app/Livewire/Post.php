<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $text;

    public function create()
    {
        \App\Models\Post::create([
            'content' => $this->text,
        ]);
    }
    public function render()
    {
        return view('livewire.post', [
            'posts' => \App\Models\Post::all()->sortByDesc('created_at'),
        ]);
    }
}
