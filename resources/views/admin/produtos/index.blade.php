@extends('admin.main')


@section('conteudo')

    <div class="container">
        <div class="row">
            <a href="{{route('produtos.create')}}" class="btn btn-success ">Novo</a>
        </div>
    </div>


    <div class="container">

        <div class="row">

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Estoque</th>
                    <th>Categoria</th>
                    <th>Subcategoria</th>
                    <th>-</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td class="table-colunm-70">{{$produto->nome}}</td>

                        <td>
                            <a href="{{route('categorias.edit',$categoria)}}" class="btn btn-primary ">Editar</a>
                            <form action="{{route('categorias.destroy', $categoria)}}" method="post" class="form-delete">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger " type="submit">Apagar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
