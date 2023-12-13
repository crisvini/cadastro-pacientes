{{-- <form wire:submit="save" class="row">
    <div class="form-floating mb-3 col-12 col-lg-8">
        <input type="text" class="form-control" id="nome" placeholder="Nome" wire:model="name">
        <label for="nome" class="text-secondary ms-3">Nome</label>
    </div>
    <div class="form-floating mb-3 col-12 col-lg-4">
        <input type="color" class="form-control form-control-color w-100" id="color" value="#999999"
            title="Selecione uma cor" wire:model="color">
        <label for="color" class="form-label h-50 my-0 py-0 mt-2 ms-2">Cor</label>
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
            <input wire:model="color" type="color"
                class="p-1 h-full w-full block bg-transparent border border-gray-300 cursor-pointer rounded-lg"
                id="color" value="#2563eb" title="Choose your color">
        </div>
        <div class="relative col-span-3">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Salvar</button>
        </div>
    </div>
</form>
