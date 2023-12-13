<form wire:submit="save" class="row">
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
</form>
