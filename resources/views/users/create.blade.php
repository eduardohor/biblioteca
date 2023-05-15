
@extends('template.header')
@section('body')  
        <h1>Cadastrar Usuário</h1>
        <form action="{{route('users.store')}}" method="post" class="m-4 w-50" >
        @csrf
             <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Maria" name="name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="maria@email.com" name="email">

            </div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  