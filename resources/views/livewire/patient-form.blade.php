<form wire:submit="save" class="row">
    <div class="form-floating mb-3 col-12 col-lg-8">
        <input type="text" class="form-control" id="nome" placeholder="Nome" wire:model="name">
        <label for="nome" class="text-secondary ms-3">Nome</label>
    </div>
    <div class="form-floating mb-3 col-12 col-lg-4">
        <input x-mask="99/99/9999" type="text" class="form-control" id="date_of_birth" placeholder="Nascimento"
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
    <div class="col-12">
        <div class="row d-flex justify-content-end align-items-end">
            <div class="col-12 col-lg-3">
                <button class="form-control btn btn-primary w-100" type="submit">Salvar</button>
            </div>
        </div>
    </div>
</form>
