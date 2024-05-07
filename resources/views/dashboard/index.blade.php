@extends('layouts.template')
@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="container">
            @if (auth()->user()->is_admin)
                <div class="row ">
                    <div class="col-lg-6 shadow p-3 mb-5 bg-body rounded my-5 text-center">
                        <h3 class="mt-5 text-center">Total de bolsas doadas</h3>
                        <p class="my-5">{{ $total_quantity_blood }} ML</p>
                        <p>Atualizado em: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
                    </div>

                    <div class="col-lg-6 shadow p-3 mb-5 bg-body rounded my-5">
                        <h3 class="mt-5 text-center">Total de bolsas por hemocentro</h3>
                        @foreach ($bloodCentersWithQuantity as $bloodCenter)
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>{{ $bloodCenter->name }}</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Total : {{ $bloodCenter->historics_sum_quantity_blood }} ML</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mt-5 text-center">Agendamentos</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Doador</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Tipo sanguineo</th>
                                    <th scope="col">Hemocentro</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedulingAlls as $schedulingAll)
                                    <tr>
                                        <td>{{ $schedulingAll->user->name }}</td>
                                        <td>{{ $schedulingAll->phone }}</td>
                                        <td>{{ date('d/m/Y', strtotime($schedulingAll->scheduling_date)) }}</td>
                                        <td>{{ $schedulingAll->blood_type }}</td>
                                        <td>{{ $schedulingAll->bloodCenter->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
