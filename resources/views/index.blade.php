@extends('templates.template')
@section('content')
    <h1 class="text-center">- - Filmes assistidos - -
        <a href="{{url('create')}}">
            <button class="btn btn-success">Cadastrar novo</button>
        </a>
    </h1>
    <hr>
    <div class="col-8 m-auto">
    <table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Cadastro</th>
      <th scope="col">Lançamneto</th>
      <th scope="col">Duração</th>
      <th scope="col">Ação CRUD</th>
    </tr>
  </thead>
  <tbody>
    @foreach($movie as $movies)
    @php
        $user=$movies->find($movies->id)->relUsers;
    @endphp
    <tr>
        <th scope="row">{{$movies->id}}</th>
        <td>{{$movies->titulo}}</td>
        <td>{{$user->name}}</td>
        <td>{{$movies->ano_lançamento}}</td>
        <td>{{$movies->tempo}}</td>
        <td>
            <a href="{{url("movies/$movies->id")}}">
                <button class="btn btn-dark">Visualizar</button>
            </a>

            <a href="{{url("movies/$movies->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
            </a>

            <a href="">
                <button class="btn btn-danger">Deletar</button>
            </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection
