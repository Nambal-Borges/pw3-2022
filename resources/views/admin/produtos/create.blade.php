@extends('admin.main')

@section('conteudo')
    <div class="container">
        <div class="row">
            <form action="{{route('produtos.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label  for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" required>
                    <label  for="nome">Descrição:</label>
                    <input class="form-control" type="text" name="descricao" id="descricao" required>
                    <label  for="nome">Valor:</label>
                    <input class="form-control" type="number" name="valor" id="valor" required>
                    <label  for="nome">Estoque:</label>
                    <input class="form-control" type="number" name="valor" id="valor" required>

                    <div class="form-group">
                        <label for="categoria">Categoria:</label>
                        <select name="categoria_id" id="categoria" class="form-control" required>
                            <option value="">Selecione uma categoria</option>
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Salvar</button>
                    <a class="btn btn-danger"  href="{{route('categorias.index')}}" >Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
