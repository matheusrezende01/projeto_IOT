<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Ambientes</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('registro.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Registro
            </a>
        </div>
    </div>


            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sensor</th>
                            <th>Valor</th>
                            <th>Unidade</th>
                             <th>Data e hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($registros as $registro)
                            <tr>
                                <td>{{ $registro->sensor_id }}</td>
                                <td>{{ $registro->valor }}</td>
                                <td>{{ $registro->unidade }}</td>
                                <td>{{ $registro->data_hora }}</td>
                                <td>
                                    <a href="{{ route('registro.edit', $registro->id) }}" 
                                        class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="delete({{ $registro->id }})" 
                                        class="btn btn-sm btn-outline-danger me-1" tittle="Excluir"
                                        wire:confirm="Tem certeza?">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Nenhum ambiente encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>