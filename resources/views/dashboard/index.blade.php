@extends('layouts.template')
@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="container">

            @if (auth()->user()->is_admin)
                <div class="row justify-content-center">
                    <h1 class="pt-5 text-center mb-4" style="font-size: 25px;color:#B00C0C">Dashboard</h1>
                    <div class="col-lg-4 shadow p-3 mb-4 bg-body rounded my-4 mx-5" style="max-height: 250px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#B00C0C"
                            class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                            <path
                                d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                        </svg>
                        <h5 class="mt-3">Total de bolsas doadas</h5>
                        <div class="card" style="border:none; margin-left:-10px;">
                            <div class="card-body">
                                <p>{{ $total_quantity_blood }} ML</p>
                                <p class="">Atualizado em: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 shadow p-3 mb-4 bg-body rounded my-4 mx-5" style="max-height: 250px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#B00C0C"
                            class="bi bi-hospital-fill" viewBox="0 0 16 16">
                            <path
                                d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9m0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25" />
                        </svg>
                        <h5 class="mt-3">Total de bolsas por hemocentro</h5>
                        @foreach ($bloodCentersWithQuantity as $bloodCenter)
                            <div class="card" style="border:none;margin-left:-10px;">
                                <div class="card" style="width: 18rem; border:none;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            {{ $bloodCenter->name }} {{ $bloodCenter->historics_sum_quantity_blood }} ML</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 shadow p-3 mb-4 bg-body rounded my-4 mx-5" style="max-height: 250px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#B00C0C"
                            class="bi bi-calendar3-week-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 0a2 2 0 0 0-2 2h16a2 2 0 0 0-2-2zM0 14V3h16v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m12-8a1 1 0 1 0 2 0 1 1 0 0 0-2 0M5 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0m5-2a1 1 0 1 1 0-2 1 1 0 0 1 0 2M2 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                        </svg>
                        <h5 class="mt-3">Consultar agendamentos</h5>
                        <div class="card" style="border:none;margin-left:-15px">
                            <div class="card-body">
                                <a class="btn btn-primary" href="{{route('schedulings.getAllScheduling')}}" role="button">Consulte aqui</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 shadow p-3 mb-4 bg-body rounded my-4 mx-5" style="max-height: 250px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#B00C0C"
                            class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                            <path
                                d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9z" />
                            <path
                                d="M.88 8C-2.427 1.68 4.41-2 7.823 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8z" />
                        </svg>
                        <h5 class="mt-3">Registrar doação</h5>
                        <div class="card" style="border:none;margin-left:-15px">
                            <div class="card-body">
                                <a class="btn btn-primary" href="{{route('historics.create')}}" role="button">Registre aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-6 my-5">
                        <a href="{{ route('schedulings.create') }}" class="my-3 btn btn-link">Realizar novo agendamento</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6  shadow p-3 mb-5 bg-body rounded">
                        <h3 class="mt-3 mb-5 text-center">Meus agendamentos</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hemocentro</th>
                                    <th scope="col">Sangue</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedulings as $scheduling)
                                    <tr>
                                        <td>{{ date('d/m/Y', strtotime($scheduling->scheduling_date)) }}</td>
                                        <td>{{ $scheduling->bloodCenter->name }}</td>
                                        <td>{{ $scheduling->blood_type }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 shadow p-3 mb-5 bg-body rounded">
                        <h3 class="mt-3 mb-5 text-center">Minhas doações</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hemocentro</th>
                                    <th scope="col">Qtd da bolsa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($historics as $historic)
                                    <tr>
                                        <td>{{ date('d/m/Y', strtotime($historic->donation_date)) }}</td>
                                        <td>{{ $historic->bloodCenter->name }}</td>
                                        <td>{{ $historic->scheduling->name }}</td>
                                        <td>{{ $historic->quantity_blood }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    @endsection
