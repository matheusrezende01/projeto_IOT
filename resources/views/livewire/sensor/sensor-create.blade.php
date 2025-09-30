<div class="container mt-4">


    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-2 mb-2 rounded">
            {{ session('message') }}
        </div>
    @endif


    @csrf

    <div class="card">
        <h5 class="card-header">Cadastro de Sensores</h5>

        <div class="card-body">
            <form wire:submit.prevent="store">

                 <label for="status" >Ambiente</label>
                <select class="form-select mb-2" aria-label="Default select example" wire:model.defer="ambiente">
                    <option selected>Selecione</option>
                    @foreach ($ambientes as $ambiente)
                        <option value="{{$ambiente->id}}">{{$ambiente->nome}}</option>
                    @endforeach
                </select>

                 <div class="mb-3">
                    <label for="codigo" class="form-label">Codigo</label>
                    <input type="text" class="form-control @error('codigo') is-invalid @enderror" id="codigo"
                        wire:model.defer="codigo" placeholder="Ex: Insira seu codigo">
                    @error('codigo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                 <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo</label>
                    <input type="text" class="form-control @error('tipo') is-invalid @enderror" id="tipo"
                        wire:model.defer="tipo" placeholder="Ex: Insira seu tipo de sensor">
                    @error('tipo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <div class="mb-3">
                    <label for="descricao">descricao</label>
                    <input type="text" class="form-control @error('descricao') is-invalid @enderror" id="descricao"
                        wire:model.defer="descricao" placeholder="Insira a descrição do sensor">
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

