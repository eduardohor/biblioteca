
@extends('layouts.template')
@section('content')  

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

         @if(session()->has('destroy'))
          <div class="d-block mt-3 alert alert-success alert-dismissible fade show">
            {{ session()->get('destroy') }}
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
            @forelse ($users as $user)
                <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td class="text-center">
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning text-white">Editar</a>
                    <a href="#delete-{{ $user->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $user->id }}">
                      Remover
                    </a>
                    @include('users.delete')
                </td>
                </tr>
            @empty
              <tr class="text-center">
                <td colspan="6">Nenhum usuário cadastrado</td>
              </tr>
            @endforelse
            </tbody>
            </table>

@endsection
   
  