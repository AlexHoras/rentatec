@extends('layouts.main')
@section('title', 'Pagina inicial')
@section('name', 'Cadastra cliente')
@section('content')
<div id="formulario">
    <div class="centraliza">
        <form action="/clientes" method="POST" class="form-cliente row" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class=" col-md-12">
                <input type="text" id="cnpj" name="cnpj" class="form-control name" placeholder="Cnpj">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" id="razao" name="razao" placeholder="Razão social">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" id="fantasia" name="fantasia" placeholder="Nome fantasia">
            </div>
            <div class="col-md-12">
                <input name="cep" id="cep" class="form-control" placeholder="Cep">
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="uf" name="uf" placeholder="Uf">
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="number" name="number" placeholder="Numero">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
            <div class="botao col-md-12">
                <div class="botao-enviar ">
                    <button class="third" type="submit">CADASTRAR</button>
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
