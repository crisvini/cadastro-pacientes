<div class="relative overflow-x-auto">
    <div class="pb-4 bg-white dark:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass text-blue-600"></i>
            </div>
            <input wire:model="search" wire:input="getPatients" type="text" id="table-search"
                class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar pacientes">
        </div>
    </div>

    <x-modal title="Paciente {{ $patient_id_modal }} - {{ $patient_name_modal }}" size="5xl" wire="patient_modal">
        <form wire:submit="updatePatient">
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div class="relative col-span-3 lg:col-span-2">
                    <input wire:model="patient_name_modal" type="text" id="name" value="{{ $patient_name_modal }}"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm @error('name') border-red-500 @enderror text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="name"
                        class="absolute text-sm @error('name') text-red-500 @enderror text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                        Nome
                    </label>
                </div>
                <div class="relative col-span-3 lg:col-span-1">
                    <input wire:model="patient_date_of_birth_modal" type="date" id="patient_date_of_birth_modal"
                        value="{{ $patient_date_of_birth_modal }}"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm @error('date_of_birth') border-red-500 @enderror text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="date_of_birth"
                        class="absolute text-sm @error('date_of_birth') text-red-500 @enderror text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                        Nascimento
                    </label>
                </div>
                <div class="relative col-span-3 lg:col-span-2">
                    <input wire:model="patient_address_modal" type="text" id="address" value="{{ $patient_address_modal }}"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm @error('address') border-red-500 @enderror text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="address"
                        class="absolute text-sm @error('address') text-red-500 @enderror text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                        Endereço
                    </label>
                </div>
                <div class="relative col-span-3 lg:col-span-1">
                    <input x-mask="(99) 99999-9999" wire:model="patient_phone_modal" type="text" id="phone"
                        value="{{ $patient_phone_modal }}"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm @error('phone') border-red-500 @enderror text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="phone"
                        class="absolute text-sm @error('phone') text-red-500 @enderror text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                        Telefone
                    </label>
                </div>
                {{-- <div class="relative col-span-3 lg:col-span-1">
                    <label for="tags"
                        class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                        Tags
                    </label>
                    <select wire:model="tags" multiple id="tags"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @forelse ($existant_tags as $tag)
                            <option value="{{ $tag->id }}" class="font-bold" style="color: {{ $tag->color }}">
                                {{ $tag->name }}
                            </option>
                        @empty
                            <option value="" disabled>Nenhuma tag encontrada</option>
                        @endforelse
                    </select>
                </div> --}}
                <div class="relative col-span-3">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Salvar</button>
                </div>
            </div>
        </form>

    </x-modal>

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
                    <td class="px-6 py-4">
                        <a class="underline italic text-blue-500" wire:click="openModal({{ $patient }})">
                            {{ $patient->name }}
                        </a>
                    </td>
                    <td class="px-6 py-4"> {{ \Carbon\Carbon::parse($patient->date_of_birth)->format('d/m/Y') }}</td>
                    <td class="px-6 py-4"> {{ $patient->address }} </td>
                    <td class="px-6 py-4">
                        {{ '(' . substr($patient->phone, 0, 2) . ') ' . substr($patient->phone, 2, 5) . '-' . substr($patient->phone, 7, 4) }}
                    </td>
                    <td class="px-6 py-4">
                        @if (!empty($patient['tags_info']))
                            @foreach (json_decode($patient['tags_info'], true) as $tagId => $tagInfo)
                                <span
                                    class="bg-blue-100 text-stone-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:text-blue-300"
                                    style="background-color: {{ $tagInfo['tag_color'] }}">
                                    {{ $tagInfo['tag_name'] }}
                                </span>
                            @endforeach
                        @else
                            Nenhuma tag encontrada
                        @endif
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
