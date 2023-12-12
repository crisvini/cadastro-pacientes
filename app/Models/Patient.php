<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'date_of_birth',
        'phone'
    ];

    public function patientTag()
    {
        return $this->hasMany(PatientTag::class, 'patient_id');
    }
}
