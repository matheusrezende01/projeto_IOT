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
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                        wire:model.defer="nome" placeholder="Ex: Insira seu ambiente">
                    @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="descricao">descricao</label>
                    <input type="text" class="form-control @error('descricao') is-invalid @enderror" id="descricao"
                        wire:model.defer="descricao" placeholder="Insira a descrição do ambiente">
                    @error('descricao')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <label for="status" >Status</label>
                <select class="form-select mb-2" aria-label="Default select example" wire:model.defer="status">
                    <option selected>Selecione</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>

                <button type="submit" class="btn btn-success">Cadastrar Ambiente</button>
            </form>
        </div>
    </div>
</div>
