
@extends('template.header')
@section('body')  
        <h1>GÊNEROS</h1>
        <div class="d-flex justify-content-between">
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
            @foreach ($genders as $gender)
                <tr>
                <th scope="row">{{$gender->id}}</th>
                <td>{{$gender->name}}</td>
                <td class="d-flex justify-content-around">
                    <a href="{{route('genders.edit', $gender->id)}}" class="btn btn-warning text-white">Editar</a>
                    <form action="{{route('genders.destroy', $gender->id)}}" method="post">
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
   
  