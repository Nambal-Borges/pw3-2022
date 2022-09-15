@extends('admin.main')




@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('subcategorias.update', $subcategoria)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label  for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" required value="{{$subcategoria->nome}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select name="categoria_id" id="categoria" class="form-control" required>
                        <option value=""></option>
                        @foreach($categorias as $categoria)
                            @if($categoria->id == $subcategoria->categoria->id)
                                <option value="{{$categoria->id}}" selected>{{$categoria->nome}}</option>
                            @else
                                <option value="{{$categoria->id}}" >{{$categoria->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <button class="btn btn-success" type="submit">Salvar</button>
                    <a class="btn btn-danger" style="margin-left:5px "  href="{{route('subcategorias.index')}}" >Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
