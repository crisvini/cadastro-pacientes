<form wire:submit="save" class="row">
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
</form>
