
@extends('layouts.template')
@section('content')  
        <h1>Cadastrar Gênero</h1>
        <form action="{{route('genders.store')}}" method="post" class="m-4 w-50" >
        @csrf
             <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control @if ($errors->has('name')) is-invalid @endif"  placeholder="Maria" name="name">
                 @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            @foreach ($errors->get('name') as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
@endsection
   
  