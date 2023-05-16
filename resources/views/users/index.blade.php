
@extends('template.header')
@section('body')  

        @if(session()->has('create'))
          <div class="d-block mt-3 alert alert-success alert-dismissible fade show">
            {{ session()->get('create') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

         @if(session()->has('update'))
          <div class="d-block mt-3 alert alert-success alert-dismissible fade show">
            {{ session()->get('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <h1>USUÁRIOS</h1>
        <a href="{{route('users.create')}}" class="btn btn-info mt-4 mb-4">Cadastrar Novo Usuário</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nº de Cadastro</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td class="d-flex justify-content-around">
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning text-white">Editar</a>
                    <form action="{{route('users.destroy', $user->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger text-white">Excluir</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>

@endsection
   
  