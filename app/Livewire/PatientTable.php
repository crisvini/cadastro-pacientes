<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;

class PatientTable extends Component
{
    public $patients = [];

    #[On('patient-created')]
    public function getPatients()
    {
        // $this->patients = Patient::select(
        //     'patients.id',
        //     'patients.name',
        //     'patients.date_of_birth',
        //     'patients.address',
        //     'patients.phone',
        //     DB::raw('GROUP_CONCAT(patient_tags.tag_id SEPARATOR \',\') AS tags')
        // )
        //     ->leftJoin('patient_tags', 'patients.id', '=', 'patient_tags.patient_id')
        //     ->groupBy('patients.id', 'patients.name', 'patients.date_of_birth', 'patients.address', 'patients.phone')
        //     ->get();
        // $this->patients = Patient::select(
        //     'patients.id',
        //     'patients.name',
        //     'patients.date_of_birth',
        //     'patients.address',
        //     'patients.phone',
        //     DB::raw('GROUP_CONCAT(tags.name SEPARATOR \',\') AS tag_names'),
        //     DB::raw('GROUP_CONCAT(tags.color SEPARATOR \',\') AS tag_colors')
        // )
        // ->leftJoin('patient_tags', 'patients.id', '=', 'patient_tags.patient_id')
        // ->leftJoin('tags', 'patient_tags.tag_id', '=', 'tags.id')
        // ->groupBy('patients.id', 'patients.name', 'patients.date_of_birth', 'patients.address', 'patients.phone')
        // ->get();
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
            ->groupBy('patients.id', 'patients.name', 'patients.date_of_birth', 'patients.address', 'patients.phone')
            ->get();
        // dd($this->patients);
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
