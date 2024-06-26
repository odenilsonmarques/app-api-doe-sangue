@extends('layouts.template')
@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="hero row align-items-center mt-5">
                    <div class="col-lg-6 hero-text">
                        <h1 class="mt-5">Salve vidas doando sangue regularmente</h1>
                        <p class="mt-3">Doe sangue, a vida agradece.</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ 'assets/img/source_1.gif' }}" alt="" class="" width="350"
                            height="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row texts-features">
            <h2 class="text-center mt-5">Escolha como doar</h2>
            <div class="col mt-5 show-card">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mt-3"><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Agendar doação criando uma conta</a></h5>
                    </div>
                    <div class="card-body">
                        <ul class="">
                            <li>Garante uma reserva de sangue para emergências médicas</li>
                            <li>Aumenta a disponibilidade de tipos sanguíneos raros</li>
                            <li>Ajuda a salvar vidas de pacientes com doenças graves</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col mt-5 show-card">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mt-3"><a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ja tem uma conta, acesse aqui</a></h5>
                    </div>
                    <div class="card-body">
                        <ul class="">
                            <li>Garante uma reserva de sangue para emergências médicas</li>
                            <li>Aumenta a disponibilidade de tipos sanguíneos raros</li>
                            <li>Ajuda a salvar vidas de pacientes com doenças graves</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col  mt-5 show-card">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mt-3">Agendar doação sem criar uma conta</h5>
                    </div>
                    <div class="card-body">
                        <ul class="">
                            <li>Facilita o processo de doação para doadores regulares</li>
                            <li>Reduz o tempo gasto em procedimentos administrativos</li>
                            <li>Contribui para manter os estoques de sangue em níveis adequados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
