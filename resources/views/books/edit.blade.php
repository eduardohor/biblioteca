
@extends('template.header')
@section('body')  
        <h1>Editar Livro</h1>
        <form action="{{route('books.update', $book->id)}}" method="post" class="m-4 w-50" >
        @csrf
        @method('put')
            <div class="row">
                <div class="form-group col">
                    <label>Gênero</label>
                    <select class="form-select" name="gender_id">
                        <option value="{{$book->gender->id}}">{{$book->gender->name}}</option>
                        @foreach ($genders as $gender)
                            @if ($gender->name !== $book->gender->name)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>    
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label >Número de Registro</label>
                    <input type="text" class="form-control" placeholder="12345657" name="registration_number" value="{{$book->registration_number}}">        
                </div>
            <div>
            <div class="row">
                <div class="form-group col">
                    <label">Nome</label>
                    <input type="text" class="form-control" placeholder="O Pequeno Príncipe" name="name" value="{{$book->name}}">        
                </div>
                <div class="form-group col">
                    <label >Autor</label>
                    <input type="text" class="form-control" placeholder="Antoine de Saint-Exupéry" name="author" value="{{$book->author}}">        
                </div>
             <div>
            <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
        </form>
@endsection
   
  