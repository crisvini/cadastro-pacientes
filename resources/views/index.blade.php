<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes > Carefy</title>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <script src="https://kit.fontawesome.com/60656bf09a.js" crossorigin="anonymous"></script>
    <tallstackui:script />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<header class="mb-7">
    <livewire:navbar />
</header>

<body>
    <x-toast />
    <section class="mx-3 lg:mx-auto max-w-screen-xl">
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                    aria-controls="accordion-collapse-body-1">
                    <span class="text-blue-600"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;Inserir
                        paciente</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-00">
                    <livewire:patient-form />
                </div>
            </div>

            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="text-blue-600"><i class="fa-solid fa-tags"></i>&nbsp;&nbsp;Inserir tag</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200">
                    <livewire:tag-form />
                </div>
            </div>
        </div>
    </section>

    <section class="mx-3 mt-4 lg:mx-auto max-w-screen-xl">
        <livewire:patient-table />
    </section>
    @livewireScripts
</body>

</html>
