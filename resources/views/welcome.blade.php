@extends('layouts.main')
@section('title', 'Pagina inicial')
@section('name', 'Lista de clientes')
@section('content')
    <section>
        <div class="esteira">
            <div class="botao">
                <a class="cadastra" href="/create">Cadastrar</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Razão social</th>
                    <th>Nome fantasia </th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $user->razao_social }}</td>
                            <td>{{ $user->nome_fantasia }}</td>
                            <td>{{ $user->cidade }}</td>
                            <td>{{ $user->uf }}</td>
                            <td class="opcaos">
                                <a href="/cliente/{{ $user->id }}" class="view">Visualizar</a>
                                <a href="/cliente/edit/{{ $user->id }}" class="edit">Editar</a>
                                <form action="/cliente/del/{{ $user->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="del" >Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
