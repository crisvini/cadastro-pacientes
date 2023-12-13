<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient;
use App\Models\PatientTag;
use App\Models\Tag;
use TallStackUi\Traits\Interactions;
use Livewire\Attributes\On;

class PatientForm extends Component
{
    use Interactions;

    public $name = '';
    public $address = '';
    public $date_of_birth = '';
    public $phone = '';
    public $tags = [];
    public $existantTags = [];

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
        ]);

        try {
            $patient = Patient::create($validated);

            foreach ($this->tags as $tagId) {
                PatientTag::create([
                    'tag_id' => $tagId,
                    'patient_id' => $patient->id
                ]);
            }
        } catch (\Throwable $th) {
            $this->toast()->error('Erro na inserção de paciente, tente novamente mais tarde');
        }

        $this->dispatch('patient-created');
        $this->name = '';
        $this->address = '';
        $this->date_of_birth = '';
        $this->phone = '';
        $this->tags = [];
        $this->toast()->success('Paciente criado com sucesso!');
    }

    #[On('tag-created')]
    public function getTags()
    {
        $this->existantTags = Tag::all();
    }

    public function mount()
    {
        $this->getTags();
    }

    public function render()
    {
        return view('livewire.patient-form');
    }
}
