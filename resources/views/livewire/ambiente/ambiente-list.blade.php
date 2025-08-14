
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Alunos</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('aluno.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Novo Ambiente
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
                            <th>Descricao</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ambientes as $ambiente)
                            <tr>
                                <td>{{ $ambiente->nome }}</td>
                                <td>{{ $ambiente->descricao }}</td>
                                <td>{{ $ambiente->status }}</td>
                                <td>
                                    <a href="{{ route('ambiente.edit', $ambiente->id) }}" 
                                        class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="delete({{ $ambiente->id }})" 
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

            <div class="mt-3">
                {{ $alunos->links() }}
            </div>
        </div>
    </div>
</div>
