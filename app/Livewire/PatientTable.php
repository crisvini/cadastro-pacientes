<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;

class PatientTable extends Component
{
    public $search = '';
    public $patients = [];

    public function updatedSearch()
    {
        $this->getPatients();
    }

    #[On('patient-created')]
    public function getPatients()
    {
        $this->patients = Patient::select(
            'patients.id',
            'patients.name',
            'patients.date_of_birth',
            'patients.address',
            'patients.phone',
            DB::raw('JSON_OBJECTAGG(patient_tags.tag_id, JSON_OBJECT("tag_name", tags.name, "tag_color", tags.color)) AS tags_info')
        )
            ->leftJoin('patient_tags', 'patients.id', '=', 'patient_tags.patient_id')
            ->leftJoin('tags', 'patient_tags.tag_id', '=', 'tags.id')
            ->when($this->search, function ($query) {
                $query->where('patients.name', 'like', '%' . $this->search . '%');
            })
            ->groupBy('patients.id', 'patients.name', 'patients.date_of_birth', 'patients.address', 'patients.phone')
            ->get();
    }

    public function mount()
    {
        $this->getPatients();
    }

    public function render()
    {
        return view('livewire.patient-table');
    }
}
