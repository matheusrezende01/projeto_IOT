<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

        
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar sensor</h4>
                </div>

                <div class="card-body">

                
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                 
                    <form wire:submit.prevent="update">

                       
                        <div class="mb-3">
                            <label class="form-label">Nome:</label>
                            <input type="nome" wire:model.defer="nome" class="form-control form-control-lg" placeholder="Digite o nome completo">
                            @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                      
                        <div class="mb-3">
                            <label class="form-label">Codigo:</label>
                            <input type="Codigo" wire:model.defer="codigo" class="form-control form-control-lg">
                            @error('Codigo') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo:</label>
                            <input type="tipo" wire:model.defer="tipo" class="form-control form-control-lg">
                            @error('tipo') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descricao:</label>
                            <input type="descricao" wire:model.defer="descricao" class="form-control form-control-lg">
                            @error('descricao') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>


                     
                        <div class="mb-3">
                           <select class="form-select mb-2" aria-label="Default select example" wire:model.defer="status">
                    <option selected>Selecione</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>


                        <a href="{{route('sensor.list')}}" class="btn btn-secondary">Voltar</a>
                <button class="btn"></button>

                

                <button type="submit" class="btn btn-success w-10  shadow-sm hover-shadow">
                    <i class="bi bi-pencil-square me-1"></i> Atualizar sensor
                </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>