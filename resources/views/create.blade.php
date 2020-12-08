@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar novo filme</h1> <hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{url('movies')}}">
            @csrf
            <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título:"><br>
            <select class="form-control" name="id_user" id="id_user">
                <option value="">Nome do filme</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="ano_lançamento" id="ano_lançamento" placeholder="Lançamento/Ano:"><br>
            <input class="form-control" type="text" name="tempo" id="tempo" placeholder="Duração:"><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
    <a href="{{url('movies')}}">
        <h1 class="text-center"> <button class="btn btn-success">
            Retornar para pagina inicial</button></h1>
        </a>
@endsection
