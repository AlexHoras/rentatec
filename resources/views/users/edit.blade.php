@extends('layouts.main')
@section('title', 'Editar')
@section('name', 'Editar cliente '. $user->name)
@section('content')
<div id="formulario">
    <div class="centraliza">
        <form action="/cliente/update/{{ $user->id }}" method="POST" class="form-cliente row" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="email">Email:</label>
                <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" placeholder="Email">
            </div>
            <div class=" col-md-12">
                <label for="cnpj">Cnpj:</label>
                <input type="text" id="cnpj" name="cnpj" value="{{ $user->cnpj }}" class="form-control name" placeholder="Cnpj">
            </div>
            <div class="col-md-12">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Nome completo">
            </div>
            <div class="col-md-12">
                <label for="razao_social">Razão social:</label>
                <input type="text" class="form-control" value="{{ $user->razao_social }}" id="razao" name="razao_social" placeholder="Razão social">
            </div>
            <div class="col-md-12">
                <label for="nome_fantasia">Nome fantasia:</label>
                <input type="text" class="form-control" value="{{ $user->nome_fantasia }}" id="fantasia" name="nome_fantasia" placeholder="Nome fantasia">
            </div>
            <div class="col-md-12">
                <label for="cep">Cep:</label>
                <input name="cep" value="{{ $user->cep }}" id="cep" class="form-control" placeholder="Cep">
            </div>
            <div class="col-md-9">
                <label for="cidade">Cidade:</label>
                <input type="text" value="{{ $user->cidade }}" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="col-md-3">
                <label for="uf">UF:</label>
                <input type="text" class="form-control" value="{{ $user->uf }}" id="uf" name="uf" placeholder="Uf">
            </div>
            <div class="col-md-9">
                <label for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" value="{{ $user->logradouro }}" id="logradouro" name="logradouro" placeholder="Logradouro">
            </div>
            <div class="col-md-3">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" value="{{ $user->numero }}" id="number" name="numero" placeholder="Numero">
            </div>
            <div class="col-md-12">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" value="{{ $user->bairro }}" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="botao col-md-12">
                <div class="botao-enviar ">
                    <button class="third" type="submit">EDITAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
    <script>

    $('#cnpj').mask("00.000.000/0000-00", {reverse: true});
    $('#number').mask("000", {reverse: true});
    $('#cnpj').blur(function(e){
        let cnpj = $(this).val().replace('.','').replace('.','').replace('/','').replace('-','');

        $.ajax({
			url: 'https://receitaws.com.br/v1/cnpj/'+cnpj,
			type: 'GET',
			dataType: 'jsonp'
		}).done(function(response){
            console.log(response['status']);
            if(response['status'] == 'OK'){
                $("#name").val(response['nome']);
                $("#razao").val(response['nome']);
                $("#fantasia").val(response['fantasia']);
                $("#cep").val(response['cep']);
                $("#cidade").val(response['municipio']);
                $("#uf").val(response['uf']);
                $("#logradouro").val(response['logradouro']);
                $("#number").val(response['numero']);
                $("#bairro").val(response['bairro']);
            }else{
                alert('Cnpj é invalido!');
                $("#cnpj").val('');
                $("#name").val('');
                $("#razao").val('');
                $("#fantasia").val('');
                $("#cep").val('');
                $("#cidade").val('');
                $("#uf").val('');
                $("#logradouro").val('');
                $("#number").val('');
                $("#bairro").val('');
            }
        });

    });


    </script>
@endsection
