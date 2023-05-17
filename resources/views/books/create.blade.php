
@extends('layouts.template')
@section('content')  
        <h1>Cadastrar Livro</h1>
        <form action="{{route('books.store')}}" method="post" class="m-4 w-50" >
        @csrf
            <div class="row">
                <div class="form-group col">
                    <label>Gênero</label>
                    <select class="form-select @if ($errors->has('gender_id')) is-invalid @endif" name="gender_id">
                        @foreach ($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('gender_id'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('gender_id') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif 
                </div>
                <div class="form-group col">
                    <label >Número de Registro</label>
                    <input type="text" class="form-control @if ($errors->has('registration_number')) is-invalid @endif"
                     placeholder="12345657" name="registration_number" value="{{old('registration_number')}}">
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
                    <label>Nome</label>
                    <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" 
                    placeholder="O Pequeno Príncipe" name="name" value="{{old('name')}}">        
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
                    <input type="text" class="form-control @if ($errors->has('author')) is-invalid @endif"
                     placeholder="Antoine de Saint-Exupéry" name="author" value="{{old('author')}}">        
                    @if ($errors->has('author'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('author') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif 
                </div>
             <div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  