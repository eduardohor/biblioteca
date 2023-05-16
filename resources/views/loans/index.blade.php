
@extends('template.header')
@section('body')  

        @if(session()->has('create'))
          <div class="d-block mt-3 alert alert-success alert-dismissible fade show">
            {{ session()->get('create') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <h1>EMPRÉSTIMOS</h1>      
          <a href="{{route('loans.create')}}" class="btn btn-info mt-4 mb-4">Realizar Novo Empréstimo</a>
         <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Livro</th>
                <th scope="col">Usuário</th>
                <th scope="col">Data do Empréstimo</th>
                <th scope="col">Data da Entrega</th>
                <th scope="col">Situação</th>
                <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($loans as $loan)
                <tr>
                <th scope="row">{{$loan->id}}</th>
                <td>{{$loan->book->name}}</td>
                <td>{{$loan->user->name}}</td>
                <td>{{date('d/m/Y', strtotime($loan->loan_date))}}</td> 
                <td>{{date('d/m/Y', strtotime($loan->return_date))}}</td>            
                <td>{{$loan->situation}}</td>            
                <td class="d-flex justify-content-around">
                    <a href="" class="btn btn-primary text-white">Alterar Situação</a>
                </td>
                </tr>       
            @endforeach
            </tbody>
            </table>

@endsection
   
  