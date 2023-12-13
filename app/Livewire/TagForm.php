<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Tag;
use TallStackUi\Traits\Interactions;

class TagForm extends Component
{
    use Interactions;

    #[Validate('required')]
    public $name = '';
    #[Validate('required')]
    public $color = '';

    public function save()
    {
        $this->validate();

        $tag = Tag::create([
            'name' => $this->name,
            'color' => $this->color
        ]);
        $this->toast()->success('Tag criada com sucesso!');
    }

    public function render()
    {
        return view('livewire.tag-form');
    }
}
