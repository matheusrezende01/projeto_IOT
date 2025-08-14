<div class="container mt-4">
    

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 mb-2 rounded">
            {{ session('message') }}
        </div>
    @endif

  
        @csrf

    <div class="card">
        <h5 class="card-header">Cadastro de Ambiente</h5>

        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label> 
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                        id="nome" wire:model.defer="nome" placeholder="Ex: Insira seu ambiente">
                    @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

              

                <div class="mb-3">
                    <label for="cpf">descricao</label>
                    <input type="text" class="form-control @error('descricao') is-invalid @enderror"
                        id="descricao" wire:model.defer="descricao" placeholder="Insira a descrição do ambiente">
                    @error('descricao') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="matricula">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror"
                        id="status" wire:model.defer="status" placeholder="Ex inativo ou ativo o ambiente">
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                



                <button type="submit" class="btn btn-success">Cadastrar Ambiente</button>
            </form>
        </div>
    </div>
</div>