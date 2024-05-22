@extends('layouts.template')
@section('title', 'Home')

@section('content')

    <div class="container mb-5">
        <div class="row hero-container align-items-start">
            <div class="col-lg-6  col-md-12 hero-text">
                <h1>Salve vidas doando sangue regularmente</h1>
                <p>Doe sangue, a vida agradece.</p>
                <button type="button" class="btn btn-danger custom-button mt-3">Agendar doação</button>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <img src="{{ 'assets/img/doa.png' }}" alt="" class="img-fluid mt-4"
                    style="height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-start texts-features">
            <div class="col-lg-4 col-md-12 rounded my-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                    class="bi bi-calendar-heart-fill" viewBox="0 0 16 16">
                    <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                </svg>
                <h5 class="mt-3">Agendar criando uma conta</h5>
                <div class="card border-0 shadow p-3">
                    <div class="card-body  p-0">
                        <ul class="list-unstyled">
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Garante uma reserva de sangue para emergências médicas
                            </li>
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Aumenta a disponibilidade de tipos sanguíneos raros
                            </li>
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Ajuda a salvar vidas de pacientes com doenças graves
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12  rounded my-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                    class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                </svg>

                <h5 class="mt-3">tem uma conta, acesse aqui</h5>
                <div class="card border-0 shadow p-3">
                    <div class="card-body  p-0 ">
                        <ul class="list-unstyled">
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Garante uma reserva de sangue para emergências médicas
                            </li>
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Aumenta a disponibilidade de tipos sanguíneos raros
                            </li>
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Ajuda a salvar vidas de pacientes com doenças graves
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 rounded my-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                    class="bi bi-calendar-minus-fill" viewBox="0 0 16 16">
                    <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1" />
                </svg>
                <h5 class="mt-3">Agendar sem criar uma conta</h5>
                <div class="card border-0 shadow p-3">
                    <div class="card-body  p-0">
                        <ul class="list-unstyled">
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Garante uma reserva de sangue para emergências médicas
                            </li>
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Aumenta a disponibilidade de tipos sanguíneos raros
                            </li>
                            <li class="list-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#B00C0C"
                                    class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                </svg>
                                Ajuda a salvar vidas de pacientes com doenças graves
                            </li>
                        </ul>
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
                        <h5 class="card-title mt-3">
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                Agendar criando uma conta
                            </a>
                        </h5>
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
                        <h5 class="card-title mt-3"><a href="{{ route('login') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ja
                                tem uma conta, acesse aqui</a></h5>
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
                        <h5 class="card-title mt-3">Agendar sem criar uma conta</h5>
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
