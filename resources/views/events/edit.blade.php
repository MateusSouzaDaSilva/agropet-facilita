@extends('..layouts.main')

@section('title', 'Editando: ' . $product->prod_name)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Atualizando {{ $product->prod_name }}</h1>
    <form action="/products/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image" id="form-label">Imagem do produto:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Nome do produto:</label>
            <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Nome do produto" value="{{ $product->prod_name }}">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Valor do produto:</label>
            <input type="text" class="form-control" id="prod_price" name="prod_price" placeholder="Preço do produto" value="{{ $product->prod_price }}">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Marca:</label>
            <input type="text" class="form-control" id="prod_marca" name="prod_marca" placeholder="Marca" value="{{ $product->prod_marca }}">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Modelo:</label>
            <input type="text" class="form-control" id="prod_modelo" name="prod_modelo" placeholder="Modelo" value="{{ $product->prod_modelo }}">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Fabricante:</label>
            <input type="text" class="form-control" id="prod_fabr" name="prod_fabr" placeholder="Fabricante" value="{{ $product->prod_fabr }}">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">EAN:</label>
            <input type="text" class="form-control" id="prod_EAN" name="prod_EAN" placeholder="EAN do produto" value="{{ $product->prod_EAN }}">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Descrição:</label>
            <textarea class="form-control" id="prod_description" name="prod_description" placeholder="Descrição do produto"> {{ $product->prod_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Adicione categorias ao produto:</label>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Cachorro"> Cachorro
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Gato"> Gato            
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Passaro"> Pássaro           
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Roedor"> Roedor
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Aquario"> Aquario
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Agro"> Agro
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags" value="Higiene"> Higiene
            </div>
        </div>
        <input type="submit" value="Editar evento" class="btn btn-primary" id="send">
    </form>
</div>

@endsection