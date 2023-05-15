
@extends('template.header')
@section('body')  
        <h1>Usuários</h1>
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
                <td>Mark MarkMarkMarkMark</td>
                <td>OttoOttoOttoOttoOttoOtto</td>
                <td>
                    <a class="btn btn-warning text-white">Editar</a>
                    <a class="btn btn-danger text-white">Excluir</a>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>
                    <a class="btn btn-warning text-white">Editar</a>
                    <a class="btn btn-danger text-white">Excluir</a>
                </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>
                    <a class="btn btn-warning text-white">Editar</a>
                    <a class="btn btn-danger text-white">Excluir</a>
                </td>
                </tr>
            </tbody>
            </table>

@endsection
   
  