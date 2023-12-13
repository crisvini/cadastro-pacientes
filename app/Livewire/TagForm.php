<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tag;

class TagForm extends Component
{
    public $name = '';
    public $color = '';

    public function save()
    {
        $tag = Tag::create([
            'name' => $this->name,
            'color' => $this->color
        ]);
    }

    public function render()
    {
        return view('livewire.tag-form');
    }
}
