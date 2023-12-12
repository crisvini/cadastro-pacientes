{{-- <div class="accordion card">
    <div class="card-header">
        <h4 class="text-primary">Novo paciente</h4>
    </div>
    <div class="card-body">
        <form wire:submit="save" class="row">
            <div class="form-floating mb-3 col-12 col-lg-8">
                <input type="text" class="form-control" id="nome" placeholder="Nome" wire:model="name">
                <label for="nome" class="text-secondary ms-3">Nome</label>
            </div>
            <div class="form-floating mb-3 col-12 col-lg-4">
                <input x-mask="99/99/9999" type="text" class="form-control" id="date_of_birth"
                    placeholder="Nascimento" wire:model="date_of_birth">
                <label for="date_of_birth" class="text-secondary ms-3">Nascimento</label>
            </div>
            <div class="form-floating mb-3 col-12 col-lg-8">
                <input type="text" class="form-control" id="address" placeholder="Endereço" wire:model="address">
                <label for="address" class="text-secondary ms-3">Endereço</label>
            </div>
            <div class="form-floating mb-3 col-12 col-lg-4">
                <input x-mask="(99) 99999-9999" type="text" class="form-control" id="phone"
                    placeholder="Telefone" wire:model="phone">
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
    </div>
</div> --}}

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>
