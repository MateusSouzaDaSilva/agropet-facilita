@extends('..layouts.adm_menu')

@section('title', 'Agropet Administrativo')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um novo produto</h1>
    <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title" id="form-label">Imagem do produto:</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Imagem do produto">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Nome do produto:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do produto">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Link do produto:</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link do produto">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Valor do produto:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço do produto">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Fabricante:</label>
            <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="Fabricante">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">EAN:</label>
            <input type="text" class="form-control" id="ean" name="ean" placeholder="EAN do produto">
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Descrição:</label>
            <textarea class="form-control" id="description" name="description" placeholder="Descrição do produto"></textarea>
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Esta em promoção</label>
            <select name="promocao" id="promocao" class="form-control">
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title" id="form-label">Adicione categorias ao produto:</label>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Cachorro"> Cachorro
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Gato"> Gato            
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Passaro"> Pássaro           
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Roedor"> Roedor
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Peixe"> Peixe
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Agro"> Agro
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="Higiene"> Higiene
            </div>
        </div>
        <input type="submit" value="Criar produto" class="btn btn-primary" id="send">
    </form>
</div>

@endsection