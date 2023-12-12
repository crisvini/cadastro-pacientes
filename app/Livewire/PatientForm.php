<?php

namespace App\Livewire;

use Livewire\Component;

class PatientForm extends Component
{
    public $name = '';
    public $address = '';
    public $date_of_birth = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.patient-form');
    }
}
