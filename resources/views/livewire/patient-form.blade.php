{{-- <form wire:submit="save" class="row">
    <div class="form-floating mb-3 col-12 col-lg-8">
        <input type="text" class="form-control" id="nome" placeholder="Nome" wire:model="name">
        <label for="nome" class="text-secondary ms-3">Nome</label>
    </div>
    <div class="form-floating mb-3 col-12 col-lg-4">
        <input type="date" class="form-control" id="date_of_birth" placeholder="Nascimento"
            wire:model="date_of_birth">
        <label for="date_of_birth" class="text-secondary ms-3">Nascimento</label>
    </div>
    <div class="form-floating mb-3 col-12 col-lg-8">
        <input type="text" class="form-control" id="address" placeholder="Endereço" wire:model="address">
        <label for="address" class="text-secondary ms-3">Endereço</label>
    </div>
    <div class="form-floating mb-3 col-12 col-lg-4">
        <input x-mask="(99) 99999-9999" type="text" class="form-control" id="phone" placeholder="Telefone"
            wire:model="phone">
        <label for="phone" class="text-secondary ms-3">Telefone</label>
    </div>
    <div class="form-floating mb-3 col-12 col-lg-4">
        <select class="form-select py-2 h-100" id="floatingSelect" multiple>
            <option disabled>Selecionar tags</option>
            <option value="1" class="text-decoration-underline text-danger">One</option>
            <option value="2" class="text-decoration-underline text-primary">Two</option>
            <option value="3" class="text-decoration-underline text-success">Three</option>
        </select>
    </div>
    <div class="col-12">
        <div class="row d-flex justify-content-end align-items-end">
            <div class="col-12 col-lg-3">
                <button class="form-control btn btn-primary w-100" type="submit">Salvar</button>
            </div>
        </div>
    </div>
</form> --}}


<form wire:submit="save">
    <div class="grid gap-6 mb-6 md:grid-cols-3">
        <div class="relative col-span-3 lg:col-span-2">
            <input wire:model="name" type="text" id="name"
                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="name"
                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                Nome
            </label>
        </div>
        <div class="relative col-span-3 lg:col-span-1">
            <input wire:model="date_of_birth" type="date" id="date_of_birth"
                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="date_of_birth"
                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                Nascimento
            </label>
        </div>
        <div class="relative col-span-3 lg:col-span-2">
            <input wire:model="address" type="text" id="address"
                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="address"
                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                Endereço
            </label>
        </div>
        <div class="relative col-span-3 lg:col-span-1">
            <input x-mask="(99) 99999-9999" wire:model="phone" type="text" id="phone"
                class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="phone"
                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                Telefone
            </label>
        </div>
        <div class="relative col-span-3 lg:col-span-1">
            <label for="tags"
                class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                Tags
            </label>
            <select multiple id="tags"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="US" class="text-blue-300">United States</option>
                <option value="CA" class="text-blue-400">Canada</option>
                <option value="FR" class="text-blue-500">France</option>
                <option value="DE" class="text-blue-600">Germany</option>
            </select>
        </div>
        <div class="relative col-span-3">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Salvar</button>
        </div>
</form>
