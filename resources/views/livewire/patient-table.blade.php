<div class="relative overflow-x-auto">
    <div class="mb-2 bg-white">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass text-blue-600"></i>
            </div>
            <input type="text" id="table-search"
                class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Buscar pacientes">
        </div>
    </div>

    <table class="w-full border text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-blue-600">Código</th>
                <th scope="col" class="px-6 py-3 text-blue-600">Nome</th>
                <th scope="col" class="px-6 py-3 text-blue-600">Nascimento</th>
                <th scope="col" class="px-6 py-3 text-blue-600">Endereço</th>
                <th scope="col" class="px-6 py-3 text-blue-600">Telefone</th>
                <th scope="col" class="px-6 py-3 text-blue-600">Tags</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $patient->id }}
                    </th>
                    <td class="px-6 py-4"> {{ $patient->name }} </td>
                    <td class="px-6 py-4"> {{ \Carbon\Carbon::parse($patient->date_of_birth)->format('d/m/Y') }}</td>
                    <td class="px-6 py-4"> {{ $patient->address }} </td>
                    <td class="px-6 py-4">
                        {{ '(' . substr($patient->phone, 0, 2) . ') ' . substr($patient->phone, 3, 5) . '-' . substr($patient->phone, 8, 4) }}
                    </td>
                    <td class="px-6 py-4">
                        @forelse (json_decode($patient['tags_info'], true) as $tagId => $tagInfo)
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:text-blue-300"
                                style="background-color: {{ $tagInfo['tag_color'] }}">
                                {{ $tagInfo['tag_name'] }}
                            </span>
                            {{-- <span>{{ $tag }}</span> --}}
                        @empty
                            Nenhuma tag encontrada
                        @endforelse
                    </td>
                </tr>
            @empty
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nenhum paciente encontrado
                    </th>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
