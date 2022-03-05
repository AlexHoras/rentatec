<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    function index(){
        $users = User::all();
        return view('welcome', ['users' => $users ]);
    }

    function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $user = new User();

        $user->email = $request->email;
        $user->cnpj = $request->cnpj;
        $user->name = $request->name;
        $user->razao_social = $request->razao;
        $user->email = $request->email;
        $user->nome_fantasia = $request->fantasia;
        $user->cidade = $request->cidade;
        $user->uf = $request->uf;
        $user->logradouro = $request->logradouro;
        $user->numero = $request->number;
        $user->bairro = $request->bairro;
        $user->cep = $request->cep;

        $user->save();

        return redirect('/')->with('msg', 'Cliente Criado com sucesso!');

    }

    public function destroy($id){

        User::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Cliente excliudo com sucesso');

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request , $id) {
        $user = User::findOrFail($id);

        $user->email = $request->email;
        $user->cnpj = $request->cnpj;
        $user->name = $request->name;
        $user->razao_social = $request->razao_social;
        $user->email = $request->email;
        $user->nome_fantasia = $request->nome_fantasia;
        $user->cidade = $request->cidade;
        $user->uf = $request->uf;
        $user->logradouro = $request->logradouro;
        $user->numero = $request->numero;
        $user->bairro = $request->bairro;
        $user->cep = $request->cep;

        $user->update();
        return redirect('/')->with('msg', 'Cliente editado com sucesso');
    }

    public function show($id){

        $user = User::findOrFail($id);

        return view('users.show', ['user' => $user]);
    }

}
