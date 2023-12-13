<form wire:submit="save">
    <div class="grid gap-6 mb-6 md:grid-cols-3">
        <div class="relative col-span-3 lg:col-span-2">
            <input wire:model="name" type="text" id="name"
                class="block px-2.5 pb-2.5 pt-4 w-full text-sm @error('name') border-red-500 @enderror text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="name"
                class="absolute text-sm @error('name') text-red-500 @enderror text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                Nome
            </label>
        </div>
        <div class="relative col-span-3 lg:col-span-1" style="height: 50px">
            <input wire:model="color" type="color"
                class="p-1 h-full w-full block bg-transparent border @error('name') border-red-500 @enderror border-gray-300 cursor-pointer rounded-lg"
                id="color" value="#2563eb" title="Choose your color">
        </div>
        <div class="relative col-span-3">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Salvar</button>
        </div>
    </div>
</form>
