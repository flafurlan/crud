@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $user=$movie->find($movie->id)->relUsers;
        @endphp
        Título: {{$movie->titulo}}<br>
        Cadastrado por: {{$user->name}}<br>
        Ano de lançamento: R$ {{$movie->ano_lançamento}}<br>
        Duração do filme: {{$movie->tempo}} <br>
        Email do usuario: {{$user->email}} <br>
    </div>
@endsection

