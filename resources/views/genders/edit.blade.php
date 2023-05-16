
@extends('template.header')
@section('body')  
        <h1>Cadastrar Gênero</h1>
        <form action="{{route('genders.update', $gender->id)}}" method="post" class="m-4 w-50" >
        @csrf
        @method('put')
             <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" name="name" value="{{$gender->name}}">
                 @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('name') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
        </form>
@endsection
   
  