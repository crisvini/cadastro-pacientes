<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes > Carefy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<header class="w-100 py-1 mb-4 py-2 bg-primary-subtle">
    <div class="container-xl">
        <h2 class="text-primary-emphasis"><i class="bi bi-hospital"></i>&nbsp;&nbsp;Cadastro de Pacientes</h2>
    </div>
</header>

<body>
    <div class="container-xl">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-primary fs-4" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNewPatient" aria-expanded="true" aria-controls="collapseNewPatient">
                        <i class="bi bi-person-plus-fill"></i>&nbsp;&nbsp;Inserir novo paciente
                    </button>
                </h2>
                <div id="collapseNewPatient" class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <livewire:patient-form />
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-primary fs-4 collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseNewTag" aria-expanded="false"
                        aria-controls="collapseNewTag">
                        <i class="bi bi-tags-fill"></i>&nbsp;&nbsp;Inserir nova tag
                    </button>
                </h2>
                <div id="collapseNewTag" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <livewire:tag-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
