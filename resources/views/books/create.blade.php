
@extends('template.header')
@section('body')  
        <h1>Cadastrar Livro</h1>
        <form action="{{route('books.store')}}" method="post" class="m-4 w-50" >
        @csrf
            <div class="row">
                <div class="form-group col">
                    <label>Gênero</label>
                    <select class="form-select" name="gender_id">
                        @foreach ($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label >Número de Registro</label>
                    <input type="text" class="form-control" placeholder="12345657" name="registration_number">        
                </div>
            <div>
            <div class="row">
                <div class="form-group col">
                    <label">Nome</label>
                    <input type="text" class="form-control" placeholder="O Pequeno Príncipe" name="name">        
                </div>
                <div class="form-group col">
                    <label >Autor</label>
                    <input type="text" class="form-control" placeholder="Antoine de Saint-Exupéry" name="author">        
                </div>
             <div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  