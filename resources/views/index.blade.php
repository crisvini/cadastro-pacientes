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
    <nav class="bg-blue-200 border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-900"><i
                    class="fa-regular fa-hospital"></i>&nbsp;&nbsp;Cadastro de Pacientes</span>
            <div class="w-full lg:w-auto mt-4 lg:mt-0 flex items-center space-x-6 rtl:space-x-reverse">
                <form class="w-full lg:w-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only"></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass text-blue-600"></i>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Buscar pacientes">
                    </div>
                </form>

            </div>
        </div>
    </nav>
</header>

<body>
    <x-toast />
    <div class="mx-3 lg:mx-auto max-w-screen-xl">
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                    aria-controls="accordion-collapse-body-1">
                    <span class="text-blue-600"><i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;Inserir paciente</span>
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
    </div>
    @livewireScripts
</body>

</html>
