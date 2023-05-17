
@extends('layouts.template')
@section('content')  
        <h1>Realizar Empréstimo</h1>
        <form action="{{route('loans.store')}}" method="post" class="m-4 w-50" >
        @csrf
            <div class="row">
                <div class="form-group col">
                        <label>Usuário</label>
                        <select class="form-select @if ($errors->has('user_id')) is-invalid @endif" name="user_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('user_id'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('user_id') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                </div>
                <div class="form-group col">
                        <label>Livro</label>
                        <select class="form-select @if ($errors->has('book_id')) is-invalid @endif" name="book_id">
                            @foreach ($books as $book)
                                @if ($book->situation === 0)
                                    <option value="{{$book->id}}">{{$book->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('book_id'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('book_id') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                </div>
            </div> 
            
            <div class="row">
                <div class="form-group col">
                    <label for="exampleInputEmail1">Data Empréstimo</label>
                    <input type="date" class="form-control @if ($errors->has('loan_date')) is-invalid @endif" name="loan_date"
                     value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>">
                    @if ($errors->has('loan_date'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('loan_date') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                    @endif
                </div>
                <div class="form-group col">
                    <label for="exampleInputEmail1">Data Entrega</label>
                    <input type="date" class="form-control @if ($errors->has('return_date')) is-invalid @endif" name="return_date"
                    min="<?php echo date("Y-m-d"); ?>">
                    @if ($errors->has('return_date'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('return_date') as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                    @endif
                </div>
            </div>       

            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  