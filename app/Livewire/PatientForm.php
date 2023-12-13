<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Patient;
use TallStackUi\Traits\Interactions;

class PatientForm extends Component
{
    use Interactions;

    #[Validate('required')]
    public $name = '';
    #[Validate('required')]
    public $address = '';
    #[Validate('required')]
    public $date_of_birth = '';
    #[Validate('required')]
    public $phone = '';

    public function save()
    {
        $this->validate();

        $patient = Patient::create([
            'name' => $this->name,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
            'phone' => $this->phone
        ]);
        $this->toast()->success('Paciente criado com sucesso!');
    }

    public function render()
    {
        return view('livewire.patient-form');
    }
}
