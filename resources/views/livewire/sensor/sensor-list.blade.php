
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Sensores</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('sensor.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Sensor
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
                            <th>Nome</th>
                            <th>Codigo</th>
                            <th>Tipo</th>
                            <th>Descricao</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sensors as $sensor)
                            <tr>
                                <td>{{ $sensor->nome }}</td>
                                <td>{{ $sensor->codigo }}</td>
                                <td>{{ $sensor->tipo }}</td>
                                <td>{{ $sensor->descricao }}</td>
                                <td>{{ $sensor->status }}</td>
                                <td>
                                    <a href="{{ route('sensor.edit', $sensor->id) }}" 
                                        class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="delete({{ $sensor->id }})" 
                                        class="btn btn-sm btn-outline-danger me-1" tittle="Excluir"
                                        wire:confirm="Tem certeza?">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Nenhum sensor encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>