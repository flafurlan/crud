@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($movie)) Editar filme @else  Cadastrar novo filme @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($movie))
            <form name="formEdit" id="formEdit" method="post" action="{{url("movies/$movie->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('movies')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título:" value="{{$movie->titulo ?? ''}}" required><br>
                <select class="form-control" name="id_user" id="id_user" required>
                    <option value="{{$movie->relUsers->id ?? ''}}">{{$movie->relUsers->name ?? 'Usuario'}}</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select><br>
                <input class="form-control" type="text" name="ano_lancamento" id="ano_lancamento" placeholder="Ano de lancamento:" value="{{$movie->ano_lancamento ?? ''}}" required><br>
                <input class="form-control" type="text" name="tempo" id="tempo" placeholder="Tempo:" value="{{$movie->tempo ?? ''}}" required><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($movie)) Editar @else Cadastrar @endif">
            </form>
    </div>
    <a href="{{url('movies')}}">
        <h1 class="text-center"> <button class="btn btn-success">
            Retornar para pagina inicial</button></h1>
        </a>
@endsection
