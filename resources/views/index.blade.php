@extends('templates.template')
@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-8 m-auto">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($movie as $movies)
    @php
        $user=$movies->find($movies->id)->relUsers;
    @endphp
    <tr>
        <th scope="row">{{$movies->id}}</th>
        <td>{{$movies->title}}</td>
        <td>{{$user->name}}</td>
        <td>{{$movies->ano_lançamento}}</td>
        <td>
            <a href="{{url("movies/$movies->id")}}">
                <button class="btn btn-dark">Visualizar</button>
            </a>

            <a href="">
                <button class="btn btn-primary">Editar</button>
            </a>

            <a href="">
                <button class="btn btn-danger">Deletar</button>
            </a>
        </td>
    </tr>
    @endforeach
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
@endsection
