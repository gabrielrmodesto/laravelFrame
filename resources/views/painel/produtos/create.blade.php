@extends('painel.templates.template')
@section('contentList')
    <form action="{{route('produtos.store')}}" class="form" method="post">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-12 form-group">
                <label for="lblName">Nome</label>
                <input type="text" name="name" id="lblName" class="form-control">
            </div>
            <div class="col-1 form-group">
                <label for="lblAtivo">Ativo</label>
                <input type="checkbox" name="active" id="lblAtivo" class="form-control">
            </div>
            <div class="col-12 form-group">
                <label for="lblNumber">Number</label>
                <input type="text" name="number" id="lblNumber" class="form-control">
            </div>
            <div class="col-12 form-group">
                <label for="lblCategorias">Categorias</label>
                <select name="category" id="lblCategorias" class="form-control">
                    <option>Escolha a Categoria</option>
                    @foreach($categories as $category)
                        <option value="{{$category}}">{{$category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 form-group">
                <label for="lblDescription">Descrição</label>
                <textarea name="description" id="lblDescription" class="form-control"></textarea>
            </div>
            <div class="col-12 form-group">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection