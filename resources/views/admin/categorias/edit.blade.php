@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('categorias.update', $categoria)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label  for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" required value="{{$categoria->nome}}">


                </div>
                <br>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Salvar</button>
                    <a class="btn btn-danger" style="margin-left:5px "  href="{{route('categorias.index')}}" >Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
