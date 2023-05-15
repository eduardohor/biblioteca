
@extends('template.header')
@section('body')  
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
            @foreach ($books as $book)
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
                    <a href="" class="btn btn-warning text-white">Editar</a>
                    <form action="" method="post">
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
   
  