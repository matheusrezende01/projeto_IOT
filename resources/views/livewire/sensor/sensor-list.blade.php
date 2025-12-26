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

    @if (session()->has('message'))
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
                    <th>Ações</th> {{-- Adicionado cabeçalho para as ações --}}
                </tr>
            </thead>
            <tbody>
                @forelse($sensor as $sensor)
                    <tr>
                        <td>{{ $sensor->nome }}</td>
                        <td>{{ $sensor->codigo }}</td>
                        <td>{{ $sensor->tipo }}</td>
                        <td>{{ $sensor->descricao }}</td>
                        {{--  Substituir a exibição de status por um switch do Bootstrap e Livewire --}}
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="statusSwitch-{{ $sensor->id }}"
                                    wire:change="toggleStatus({{ $sensor->id }})"
                                    {{ $sensor->status ? 'checked' : '' }}>
                                <label class="form-check-label" for="statusSwitch-{{ $sensor->id }}">
                                    {{ $sensor->status ? 'Ativo' : 'Inativo' }}
                                </label>
                            </div>
                            <a href="{{ route('sensor.edit', $sensor->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button wire:click="delete({{ $sensor->id }})" class="btn btn-sm btn-outline-danger me-1"
                                title="Excluir" wire:confirm="Tem certeza?">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            Nenhum sensor encontrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
