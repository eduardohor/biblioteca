
@extends('template.header')
@section('body')  
        <h1>Cadastrar Usuário</h1>
        <form action="{{route('users.store')}}" method="post" class="m-4 w-50" >
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" placeholder="Maria" name="name" value="{{old('name')}}">
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
                <input type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" placeholder="maria@email.com" name="email" value="{{old('email')}}">
                @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('email') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
            </div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  