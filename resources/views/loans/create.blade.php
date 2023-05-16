
@extends('template.header')
@section('body')  
        <h1>Realizar Empréstimo</h1>
        <form action="{{route('loans.store')}}" method="post" class="m-4 w-50" >
        @csrf
            <div class="row">
                <div class="form-group col">
                        <label>Usuário</label>
                        <select class="form-select" name="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group col">
                        <label>Livro</label>
                        <select class="form-select" name="book_id">
                            @foreach ($books as $book)
                                <option value="{{$book->id}}">{{$book->name}}</option>
                            @endforeach
                        </select>
                </div>
            </div> 
            <div class="row">
                <div class="form-group col">
                    <label for="exampleInputEmail1">Data Empréstimo</label>
                    <input type="date" class="form-control" name="loan_date" value='<?php echo date("Y-m-d"); ?>'>

                </div>
                <div class="form-group col">
                    <label for="exampleInputEmail1">Data Entrega</label>
                    <input type="date" class="form-control" name="return_date">

                </div>
            </div>       

            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  