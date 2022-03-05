@extends('layouts.main')
@section('title', 'Pagina inicial')
@section('name', 'Lista de clientes')
@section('content')
<div class="visualiza">
    <div class="dados">
        <div class="row">
            <dl class="col-md-6">
                <dt>ID:</dt>
                <dd>
                    <p>{{ $user->id }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Usuario:</dt>
                <dd>
                    <p>{{ $user->name }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Razão social:</dt>
                <dd>
                    <p>{{ $user->razao_social }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Nome fantasia:</dt>
                <dd>
                    <p>{{ $user->nome_fantasia }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Cnpj:</dt>
                <dd>
                    <p>{{ $user->cnpj }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Email:</dt>
                <dd>
                    <p>{{ $user->email }}</p>
                </dd>
            </dl>
            <hr>
            <dl class="col-md-6">
                <dt>Cidade:</dt>
                <dd>
                    <p>{{ $user->cidade }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>UF:</dt>
                <dd>
                    <p>{{ $user->uf }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Logradouro:</dt>
                <dd>
                    <p>{{ $user->logradouro }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Numero:</dt>
                <dd>
                    <p>{{ $user->numero }}</p>
                </dd>
            </dl>
            <dl class="col-md-6">
                <dt>Bairro:</dt>
                <dd>
                    <p>{{ $user->bairro }}</p>
                </dd>
            </dl>
        </div>
    </div>

</div>

@endsection
