
@extends('template.header')
@section('body')  
        <h1>LIVROS</h1>
        <div class="d-flex justify-content-between">
            <a href="{{route('genders.index')}}" class="btn btn-success mt-4 mb-4">Gêneros</a>
            <a href="" class="btn btn-info mt-4 mb-4">Cadastrar Novo Livro</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nº de Cadastro</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Nome</td>
                <td>Email</td>
                <td class="d-flex justify-content-around">
                    <a href="" class="btn btn-warning text-white">Editar</a>
                    <form action="" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger text-white">Excluir</button>
                    </form>
                </td>
                </tr>
            </tbody>
            </table>

@endsection
   
  