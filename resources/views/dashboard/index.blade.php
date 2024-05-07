@extends('layouts.template')
@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="container">
            @if (auth()->user()->is_admin)
                <div class="row">
                    <div class="col lg 6">
                        <h3 class="mt-5 text-center">Agendamentos</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hemocentro</th>
                                    <th scope="col">Sangue</th>
                                    <th scope="col">Doador</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedulingAlls as $schedulingAll)
                                    <tr>
                                        <td>{{ date('d/m/Y', strtotime($schedulingAll->scheduling_date)) }}</td>
                                        <td>{{ $schedulingAll->bloodCenter->name }}</td>
                                        <td>{{ $schedulingAll->blood_type }}</td>
                                        <td>{{ $schedulingAll->user->name }}</td>
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
