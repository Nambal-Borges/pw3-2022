@extends('admin.main')


@section('conteudo')

    <div class="container">
        <br><br>
        <div class="row">

            <div class="col col-2"><B>Nome:</B></div>
            <div class="col col-10">{{$subcategoria->nome}}</div>
        </div>
        <div class="row">
            <div class="col col-2"><B>Categoria:</B></div>
            <div class="col col-10">{{$subcategoria->categoria->nome}}</div>
        </div>
        <div class="row">

            <div class="col col-2"><br><br></div>

            <a href="{{route('subcategorias.index')}}" class="btn btn-danger">Voltar</a>
        </div>
    </div>
@endsection
