@extends('layouts.main')
@section('title', 'Agropet Facilita')
@section('content')

<div class="menubar">
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Cachorro') }}" class="nav-link"> 
                    Cão
                </a>
            </li>

            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Gato') }}" class="nav-link" onclick="filtrarPorTag('Gato')">
                   Gato
                </a>
            </li>

            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Roedor') }}" class="nav-link" onclick="filtrarPorTag('Roedor')">
                    Roedor
                </a>
            </li>

            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Peixe') }}" class="nav-link" onclick="filtrarPorTag('Aquario')">
                    Peixe
                </a>
            </li>

            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Passaro') }}" class="nav-link" onclick="filtrarPorTag('Passaro')">
                    Pássaro
                </a>
            </li>

            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Higiene') }}" class="nav-link" onclick="filtrarPorTag('Higiene')">
                    Higiene
                </a>
            </li>

            <li class="nav-item menu-item">
                <a href="{{ route('produtos.filtrar', 'Agro') }}" class="nav-link" onclick="filtrarPorTag('Agro')">
                    Agro
                </a>
            </li>
         
        </ul>
    </nav>
</div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/banners/banner.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banners/banner2.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="product-list" id="listaProdutos">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-lg-2 col-md-2 col-sm-6 col-6 mt-5" id="listaProdutos">
                    <!-- 
                        col-lg-2: 5 produtos por coluna em telas grandes (lg)
                        col-md-2: 5 produtos por coluna em telas médias (md)
                        col-sm-6: 2 produtos por coluna em telas pequenas (sm)
                        col-6: 2 produtos por coluna em telas muito pequenas ou celulares (xs)
                    -->
                    <div class="card mx-auto">
                        <a href="{{ $product->prod_link }}">
                            <img src="{{ $product->prod_image }}" class="card-img-top mt-4" alt="...">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <p class="card-text">{{ $product->prod_name }}</p>
                                    </li>
                                    <li>
                                        <p class="price">R$ {{ number_format($product->prod_price, 2, ',', '.') }}</p>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    
    
    





    {{-- <div class="product-list d-flex justify-content-center">
        @foreach ($products as $product)
            <div class="card justify-content-center mt-5">
                <a href="/">
                    <img src="img/camatoca.jpg" class="card-img-top mt-4" alt="...">
                    <div class="card-body">
                        <ul>
                            <li>
                                <p class="card-text">{{ $product->prod_name }}
                                </p>
                            </li>
                            <li>
                                <p class="price">R$ {{ number_format($product->prod_price, 2, ',', '.') }}</p>
                            </li>
                        </ul>
                    </div>
            </div>
            </a>
        @endforeach --}}

        {{-- <div class="card justify-content-center mt-5">
            <a href="/">
                <img src="img/camatoca.jpg" class="card-img-top mt-4" alt="...">
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Cama toca iglu 2 em 1</p>
                        </li>
                        <li>
                            <p class="price">R$ 89,11</p>
                        </li>
                    </ul>
                </div>
        </div>
        </a>
        <div class="card justify-content-center mt-5">
            <a href="/">
                <img src="img/camatoca.jpg" class="card-img-top mt-4" alt="...">
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Cama toca iglu 2 em 1</p>
                        </li>
                        <li>
                            <p class="price">R$ 89,11</p>
                        </li>
                    </ul>
                </div>
        </div>
        </a>
        <div class="card justify-content-center mt-5">
            <a href="/">
                <img src="img/camatoca.jpg" class="card-img-top mt-4" alt="...">
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Cama toca iglu 2 em 1</p>
                        </li>
                        <li>
                            <p class="price">R$ 89,11</p>
                        </li>
                    </ul>
                </div>
        </div>
        </a>
        <div class="card justify-content-center mt-5">
            <a href="/">
                <img src="img/camatoca.jpg" class="card-img-top mt-4" alt="...">
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Cama toca iglu 2 em 1</p>
                        </li>
                        <li>
                            <p class="price">R$ 89,11</p>
                        </li>
                    </ul>
                </div>
        </div>
        </a> --}}
        {{-- <div class="card justify-content-center mt-5">
            <a href="/">
                <img src="img/camatoca.jpg" class="card-img-top mt-4" alt="...">
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Cama toca iglu 2 em 1</p>
                        </li>
                        <li>
                            <p class="price">R$ 89,11</p>
                        </li>
                    </ul>
                </div>
        </div>
        </a>
    </div> --}}

    <script>
        function filtrarPorTag(tag) {
    // Faça uma requisição AJAX para buscar os produtos da tag
    $.ajax({
        url: '/filtrar-por-tag?tag=' + tag,  // Adicione a tag à URL como um parâmetro
        type: 'GET',
        success: function (response) {
            // Limpe a lista de produtos atual
            $('#listaProdutos').empty();

            // Exiba os produtos filtrados
            response.produtos.forEach(produto => {
                $('#listaProdutos').append('<div>' + produto.nome + '</div>');
            });
        }
    });
}

    </script>

@endsection
