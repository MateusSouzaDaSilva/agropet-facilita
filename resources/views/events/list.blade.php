@extends('layouts.adm_menu')

@section('title', 'Agropet Administrativo')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus produtos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    
  
    
    <div class="product-list">
        <div class="row justify-content-center"> <!-- Adicione a classe justify-content-center para centralizar horizontalmente -->
            @foreach ($products as $product)
                <div class="col-md-2 mt-5">
                    <div class="card mx-auto"> <!-- Adicione a classe mx-auto para centralizar horizontalmente os cards -->
                        <a href="#">
                            <img src="{{ $product->prod_image }}" class="card-img-top mt-4" alt="...">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <p class="card-text">{{ $product->prod_name }}</p>
                                    </li>
                                    <li>
                                        <p class="price">R$ {{ number_format($product->prod_price, 2, ',', '.') }}</p>
                                    </li>
                                    <li>
                                        <a href="/products/edit/{{ $product->id }}" class="btn btn-primary">Atualizar</a>
                                    </li>
                                    <li>
                                    <form action="/products/{{ $product->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                     <input type="submit" class="btn btn-danger delete-btn" value="Excluir">
                                    </form>
                                       
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
       
</div>

@endsection