<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use TallStackUi\Traits\Interactions;

class PatientTable extends Component
{
    use Interactions;

    public $search = '';
    public $patients = [];
    public $patient_id_modal = '';
    public $patient_name_modal = '';
    public $patient_address_modal = '';
    public $patient_date_of_birth_modal = '';
    public $patient_phone_modal = '';
    public $patient_modal = false;

    #[On('patient-created')]
    public function getPatients()
    {
        try {
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
        } catch (\Throwable $th) {
            $this->toast()->error('Erro na consulta de paciente, tente novamente mais tarde');
        }
    }

    public function updatePatient()
    {
        $this->patient_phone_modal = preg_replace('/[^0-9]/', '', $this->patient_phone_modal);

        $validated = $this->validate([
            'patient_name_modal' => 'required',
            'patient_address_modal' => 'required',
            'patient_date_of_birth_modal' => 'required',
            'patient_phone_modal' => 'required',
        ]);

        $patient = Patient::find($this->patient_id_modal);
        $patient->name = $validated['patient_name_modal'];
        $patient->address = $validated['patient_address_modal'];
        $patient->date_of_birth = $validated['patient_date_of_birth_modal'];
        $patient->phone = $validated['patient_phone_modal'];
        $patient->save();

        $this->getPatients();

        $this->patient_modal = false;
        $this->toast()->success('Paciente atualizado com sucesso!');
    }

    public function openModal($patient)
    {
        $this->patient_modal = true;
        $this->patient_id_modal = $patient['id'];
        $this->patient_name_modal = $patient['name'];
        $this->patient_address_modal = $patient['address'];
        $this->patient_date_of_birth_modal = \Carbon\Carbon::parse($patient['date_of_birth'])->format('Y-m-d');
        $this->patient_phone_modal = '(' . substr($patient['phone'], 0, 2) . ') ' . substr($patient['phone'], 2, 5) . '-' . substr($patient['phone'], 7, 4);
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
