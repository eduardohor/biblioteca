
@extends('layouts.template')
@section('content')  
        <h1>Editar Livro</h1>
        <form action="{{route('books.update', $book->id)}}" method="post" class="m-4 w-50" >
        @csrf
        @method('put')
            <div class="row">
                <div class="form-group col">
                    <label>Gênero</label>
                    <select class="form-select @if ($errors->has('gender_id')) is-invalid @endif" name="gender_id">
                        <option value="{{$book->gender->id}}">{{$book->gender->name}}</option>
                        @foreach ($genders as $gender)
                            @if ($gender->name !== $book->gender->name)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>    
                            @endif
                        @endforeach
                        @if ($errors->has('gender_id'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('gender_id') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    </select>
                </div>
                <div class="form-group col">
                    <label >Número de Registro</label>
                    <input type="text" class="form-control @if ($errors->has('registration_number')) is-invalid @endif" placeholder="12345657" name="registration_number" value="{{$book->registration_number}}">        
                    @if ($errors->has('registration_number'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('registration_number') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif  
                </div>
            <div>
            <div class="row">
                <div class="form-group col">
                    <label">Nome</label>
                    <input type="text" class="form-control  @if ($errors->has('name')) is-invalid @endif" placeholder="O Pequeno Príncipe" name="name" value="{{$book->name}}">        
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('name') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group col">
                    <label >Autor</label>
                    <input type="text" class="form-control  @if ($errors->has('author')) is-invalid @endif" placeholder="Antoine de Saint-Exupéry" name="author" value="{{$book->author}}">        
                    @if ($errors->has('author'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('author') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                </div>
             <div>
            <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
        </form>
@endsection
   
  