<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tag;
use TallStackUi\Traits\Interactions;

class TagForm extends Component
{
    use Interactions;

    public $name = '';
    public $color = '';

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required',
            'color' => 'required'
        ]);

        try {
            Tag::create($validated);
        } catch (\Throwable $th) {
            $this->toast()->error('Erro na inserção de tag, tente novamente mais tarde');
        }


        $this->dispatch('tag-created');
        $this->name = '';
        $this->color = '';
        $this->toast()->success('Tag criada com sucesso!');
    }

    public function render()
    {
        return view('livewire.tag-form');
    }
}
