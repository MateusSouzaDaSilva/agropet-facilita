@extends('layouts.adm_menu')
@section('title', 'Agropet Administrativo')
@section('content')


    <h1>Bem-vindo ao painel Administrativo!!</h1>
    <div class="product-list d-flex justify-content-center">
        <div class="card justify-content-center mt-5">
            <a href="/products/create">
                <i class="bi bi-bag-plus-fill"></i>
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Adicionar novo produto</p>
                        </li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="card justify-content-center mt-5">
            <a href="/products/list">
                <i class="bi bi-arrow-repeat"></i>
                <div class="card-body">
                    <ul>
                        <li>
                            <p class="card-text">Atualizar produto</p>
                        </li>
                    </ul>
                </div>
            </a>
        </div>


    </div>

@endsection
