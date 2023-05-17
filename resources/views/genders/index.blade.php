
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

        <h1>GÊNEROS</h1>
        <div class="d-flex justify-content-between">
            <a href="{{route('books.index')}}" class="btn btn-success mt-4 mb-4">Livros</a>
            <a href="{{route('genders.create')}}" class="btn btn-info mt-4 mb-4">Cadastrar Novo Gênero</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($genders as $gender)
                <tr>
                <th scope="row">{{$gender->id}}</th>
                <td>{{$gender->name}}</td>
                <td class="text-center">
                    <a href="{{route('genders.edit', $gender->id)}}" class="btn btn-warning text-white">Editar</a>
                    <a href="#delete-{{ $gender->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $gender->id }}">
                      Remover
                    </a>
                    @include('genders.delete')
                </td>
                </tr>
            @empty
              <tr class="text-center">
                <td colspan="6">Nenhum gênero cadastrado</td>
              </tr>
            @endforelse
            </tbody>
            </table>

@endsection
   
  