
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

        <h1>LIVROS</h1>
        <div class="d-flex justify-content-between">
            <a href="{{route('genders.index')}}" class="btn btn-success mt-4 mb-4">Gêneros</a>
            <a href="{{route('books.create')}}" class="btn btn-info mt-4 mb-4">Cadastrar Novo Livro</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nº de Registro</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Gênero</th>
                <th scope="col">Situação</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($books as $book)
                <tr>
                <th scope="row">{{$book->registration_number}}</th>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->gender->name}}</td>
                @if ($book->situation == 0)
                    <td>Disponível</td> 
                @elseif($book->situation == 1) 
                    <td>Emprestado</td> 
                @endif                 
                <td class="d-flex justify-content-around">
                    <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning text-white">Editar</a>
                    <a href="#delete-{{ $book->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $book->id }}">
                      Remover
                    </a>
                    @include('books.delete')
                </td>
                </tr>
            @empty
              <tr class="text-center">
                <td colspan="6">Nenhum livro cadastrado</td>
              </tr>
            @endforelse
            </tbody>
            </table>

@endsection
   
  