
@extends('template.header')
@section('body')  
        <h1>Editar Usuário</h1>
        <form action="{{route('users.update', $user->id)}}" method="post" class="m-4 w-50" >
        @csrf
        @method('put')
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" name="name" value="{{$user->name}}">
                @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('name') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" name="email" value="{{$user->email}}">
                @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('email') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
        </form>
@endsection
   
  