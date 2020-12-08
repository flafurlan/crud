@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $user=$movie->find($movie->id)->relUsers;
        @endphp
        Título: {{$movie->titulo}}<br>
        Cadastrado por: {{$user->name}}<br>
        Ano de lançamento: {{$movie->ano_lançamento}}<br>
        Duração do filme: {{$movie->tempo}} <br>
        Email do usuario: {{$user->email}} <br>
    </div>
    <a href="{{url('movies')}}">
    <h1 class="text-center"> <button class="btn btn-success">
        Retornar para pagina inicial</button></h1>
    </a>
@endsection

