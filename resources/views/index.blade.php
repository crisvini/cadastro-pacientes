<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes > Carefy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<header class="w-100 py-1 mb-4 bg-primary-subtle">
    <div class="container-xl">
        <h2 class="text-primary-emphasis">Cadastro de Pacientes</h2>
    </div>
</header>

<body>
    <div class="container-xl">
        <livewire:patient-form />
    </div>
</body>

</html>
