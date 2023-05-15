
@extends('template.header')
@section('body')  
        <h1>Cadastrar Gênero</h1>
        <form action="{{route('genders.store')}}" method="post" class="m-4 w-50" >
        @csrf
             <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Maria" name="name">
                
            </div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  